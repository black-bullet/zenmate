<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Schema\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    /**
     * @param $className
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository($className)
    {
        return $this->getDoctrine()->getManager()->getRepository($className);
    }

    /**
     * @param Request $request
     * @param AbstractType $formType
     * @param $entity
     * @return \Symfony\Component\Form\FormErrorIterator|\Symfony\Component\Form\FormView
     */
    public function handleForm(Request $request, AbstractType $formType, $entity)
    {
        $formOptions = isset($options['formOptions']) ? $options['formOptions'] : array();

        /** @var \Symfony\Component\Form\Form $form */
        $form = $this->get('form.factory')->createNamed(null, $formType, $entity,
            array_merge(
                array('csrf_protection' => false),
                $formOptions
            )
        );

        $form->submit($request);

        if ($form->isValid()) {
            /** @var \Doctrine\Common\Persistence\ObjectManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $form->createView();
        } else {
            return $form->getErrors();
        }
    }
}