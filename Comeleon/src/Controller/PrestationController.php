<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Presta;
use App\Repository\PrestaRepository;

use Doctrine\ORM\EntityManagerInterface;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(PrestaRepository $repo): Response
    {
        $repo = $this->getDoctrine()->getRepository(Presta::class);

        $prestas = $repo->findAll();
        
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
            'prestas' => $prestas,
        ]);
    }

    /**
     * @Route("/prestation/new", name="prestation_create")
     */
    public function create(Request $request, EntityManagerInterface $manager) : Response
    {
        //dump($request);

        if ($request->request->count() > 0) {
            $presta = new Presta();
            $presta->setTitre($request->request->get('titre'))
                    ->setDescription($request->request->get('description'))
                    ->setImage($request->request->get('image'))
                    ->setCreatedAt(new \DateTime());
                
                    $manager->persist($presta);
                    $manager->flush();

                    return $this->redirectToRoute('prestation_show', 
                                                ['id' => $presta->getId()]);
        }

        return $this->render('prestation/create.html.twig', [
            'controller_name' => 'PrestationController',
        ]);
    }

    /**
     * @Route("/prestation/{id}", name="prestation_show")
     */
    public function show(Presta $presta): Response
    {

        return $this->render('prestation/show.html.twig', [
            'presta' => $presta
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
