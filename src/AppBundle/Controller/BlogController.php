<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('AppBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Запис не знайдений');
        }

        return $this->render('AppBundle:Blog:show.html.twig', array(
            'blog' => $blog,
        ));
    }
}