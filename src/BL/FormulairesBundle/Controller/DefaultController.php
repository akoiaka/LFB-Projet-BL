<?php

namespace Bl\FormulairesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlFormulairesBundle:Default:index.html.twig');
    }
}
