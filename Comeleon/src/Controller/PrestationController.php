<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(): Response
    {
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }

    /**
     * @Route("/prestation/1", name="prestation_show")
     */
    public function show(): Response
    {
        return $this->render('prestation/show.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }
}
