<?php

namespace BL\FormsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BLFormsBundle:Default:index.html.twig');
    }
}
