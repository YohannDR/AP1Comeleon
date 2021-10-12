<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

<<<<<<< HEAD
use App\Entity\Presta;

use App\Repository\PrestaRepository;
=======
use App\Entity\Prestation;

use App\Repository\PrestationRepository;
>>>>>>> origin/feature-PagePrestation

use Doctrine\ORM\EntityManagerInterface;

use App\Form\PrestationType;
<<<<<<< HEAD
=======
use App\Controller\CartController;

>>>>>>> origin/feature-PagePrestation

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
<<<<<<< HEAD
    public function index(PrestaRepository $repo): Response
=======
    public function index(PrestationRepository $repo): Response
>>>>>>> origin/feature-PagePrestation
    {
        $repo = $this->getDoctrine()->getRepository(Presta::class);

        $prestas = $repo->findAll();
        
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
<<<<<<< HEAD
            'prestas' => $prestas,
=======
            'prestations' => $repo->findAll()
>>>>>>> origin/feature-PagePrestation
        ]);
    }

    /**
     * @Route("/prestation/new", name="prestation_create")
     * @Route("/prestation/{id}/edit", name="prestation_edit")
     */
<<<<<<< HEAD
    public function form(Presta $presta = null, Request $request, EntityManagerInterface $manager) : Response
=======
    public function form(Prestation $prestation = null, Request $request, EntityManagerInterface $manager) : Response
    {
        if (!$prestation) {
            $prestation = new Prestation();
        }
        $form = $this->createForm(PrestationType::class, $prestation);
        
        $form->handleRequest($request); // analyser la requette http 

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$prestation->getId()) {
                $prestation->setCreatedAt(new \DateTime());
            }
            $manager->persist($prestation);
            $manager->flush();

            return $this->redirectToRoute('prestation_show', ['id' => $prestation->getId()]);
        }

        return $this->render('prestation/create.html.twig', [
            'formPrestation' => $form->createView(),
            'editMode' => $prestation->getId() !== null
        ]);
    }

    /**
     * @Route("/prestation/{id}", name="prestation_show")
     */
    public function show(Prestation $prestation) : Response
>>>>>>> origin/feature-PagePrestation
    {
        if (!$presta) {
            $presta = new Presta();
        }
        
        $presta->setTitre("Titre d'exemple")
                ->setDescription("Le contenu de la prestation");

        /*$form = $this->createFormBuilder($presta)
                     ->add('titre')
                     ->add('image')
                     ->add('description')
                     ->getForm(); */

        $form = $this->createForm(PrestationType::class, $presta);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $presta->setCreatedAt(new \DateTime());
            $manager->persist($presta);
            $manager->flush();
            return $this->redirectToRoute('prestation_show', ['id' => $presta->getId()]);
        }
        return $this->render('prestation/create.html.twig', [
            'formPresta' => $form->createView(),
            'editMode' => $presta->getId() !== null
        ]);
    }

    /**
     * @Route("/prestation/{id}", name="prestation_show")
     */
    public function show(Presta $presta): Response
    {

        return $this->render('prestation/show.html.twig', [
<<<<<<< HEAD
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
=======
            'prestation' => $prestation
>>>>>>> origin/feature-PagePrestation
        ]);
    }
}
