<?php

namespace Abhishek\GoogleApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $lat = "28.7041";
        $long = "77.1025";
        return $this->render('GoogleApiBundle:Default:index.html.twig', [
            'lat'   =>  $lat,
            'long'  =>  $long,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
