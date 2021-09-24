<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Presta;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Presta::class);

        $presta = $repo->findAll();
        
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
            'prestas' => $presta,
        ]);
    }

    /**
     * @Route("/prestation/{id}", name="prestation_show")
     */
    public function show($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Presta::class);

        $presta = $repo->find($id);

        return $this->render('prestation/show.html.twig', [
            'presta' => '$presta',
        ]);
    }

    /**
     * @Route("/prestation/create", name="prestation_create")
     */
    public function create() : Response
    {
        return $this->render('prestation/create.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }

    /**
     * @Route("/prestation/supp", name="prestation_supp")
     */
    public function supp() : Response
    {
        return $this->render('prestation/supp.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }
}
