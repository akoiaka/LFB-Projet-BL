<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }




//CI-DESSOUS un chemin provisoire pour tester la 2e page

        /**
         * @Route("/accueil", name="page1")
         */
        public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/accueil.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/articles", name="articles")
     */
    public function listearticlesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/listearticles.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/clients", name="clients")
     */
    public function listeclientsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/listeclients.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/archives", name="archives")
     */
    public function archivesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/archives.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/bl", name="bl")
     */
    public function blAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/bl.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/factures", name="factures")
     */
    public function facturesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/factures.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/listebl", name="bllist")
     */
    public function bllistAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/bllist.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/listefactures", name="factlist")
     */
    public function factlistAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/factlist.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function articleAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/article.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/modificationarticle", name="modifarticle")
     */
    public function modifarticleAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/modifarticle.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/client", name="client")
     */
    public function ficheclientAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/client.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/blpreview", name="blpreview")
     */
    public function blpreviewAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vues/blpreview.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}

