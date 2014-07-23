<?php

namespace Arisgates\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ArisgatesBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
