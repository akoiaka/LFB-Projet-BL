<?php

namespace BL\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BLFormBundle:Default:index.html.twig');
    }
}
