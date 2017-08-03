<?php

namespace ID\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IDPlateformBundle:Default:index.html.twig');
    }
}
