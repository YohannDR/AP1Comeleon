<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

=======

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Presta;

use App\Repository\PrestaRepository;

use Doctrine\ORM\EntityManagerInterface;

use App\Form\PrestationType;

>>>>>>> main
class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
<<<<<<< HEAD
    public function index(): Response
    {
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
=======
    public function index(PrestaRepository $repo): Response
    {
        $repo = $this->getDoctrine()->getRepository(Presta::class);

        $prestas = $repo->findAll();
        
        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
            'prestas' => $prestas,
>>>>>>> main
        ]);
    }

    /**
<<<<<<< HEAD
     * @Route("/prestation/1", name="prestation_show")
     */
    public function show(): Response
    {
        return $this->render('prestation/show.html.twig', [
=======
     * @Route("/prestation/new", name="prestation_create")
     * @Route("/prestation/{id}/edit", name="prestation_edit")
     */
    public function form(Presta $presta = null, Request $request, EntityManagerInterface $manager) : Response
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
            'presta' => $presta
        ]);
    }

    
    /**
     * @Route("/prestation/supp", name="prestation_supp")
     */
    public function supp() : Response
    {
        return $this->render('prestation/supp.html.twig', [
>>>>>>> main
            'controller_name' => 'PrestationController',
        ]);
    }
}
