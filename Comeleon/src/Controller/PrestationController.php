<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
        $presta = new Presta();
        $form = $this->createFormBuilder($presta)
                     ->add('titre', TextType::class, [
                         'attr' => [
                             'placeholder' => "Titre de la prestation"
                         ]
                     ])
                     ->add('image', TextType::class, [
                        'attr' => [
                            'placeholder' => "Image de la prestation"
                        ]
                    ])
                     ->add('description', TextareaType::class, [
                        'attr' => [
                            'placeholder' => "Description de la prestation"
                        ]
                    ])
                     ->getForm();


        return $this->render('prestation/create.html.twig', [
            'formPresta' => $form->createView()
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
