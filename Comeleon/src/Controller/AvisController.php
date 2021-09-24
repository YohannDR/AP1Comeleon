<?php

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="avis")
     */
    public function index(): Response
    {
        $avis = new Avis();

        $form = $this->createFormBuilder($avis)
        ->add('titre', TextType::class)
        ->add('commentaire', TextType::class)
        ->add('submit', SubmitType::class, ['label' => 'Ajouter l\'avis'])
        ->getForm();

        /*//$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            $this->redirectToRoute('task_success');
        }

        $this->renderForm('avis/index.html.twig', [
            'controller_name' => 'AvisController',
            'form' => $form,
        ]);*/

        return $this->render('avis/index.html.twig', [
            'controller_name' => 'AvisController',
            'form' => $form->createView()
        ]);
    }
}
