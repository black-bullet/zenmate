<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\Type\ContactType;
use Symfony\Component\HttpFoundation\Request;

class PageController extends  BaseController
{
    public function contactAction(Request $request)
    {
//        return $this->render('AppBundle:Page:contact.html.twig', array(
//            'form'=> $this->handleForm($request, new ContactType(), new Contact())
//        ));

        $enquiry = new Contact();
        $form = $this->createForm(new ContactType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('AppBundle_contact'));
            }
        }

        return $this->render('AppBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}