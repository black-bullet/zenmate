<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getEntityManager();

        $blogs = $em->createQueryBuilder()
            ->select('b')
            ->from('AppBundle:Blog', 'b')
            ->addOrderBy('b.createdAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('AppBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function contactAction(Request $request)
    {
        $entity = new Contact();
        $form = $this->createForm(new ContactType(), $entity);
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('AppBundle_contact'));
            }
        }
        return $this->render('AppBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}