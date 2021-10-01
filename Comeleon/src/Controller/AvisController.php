<?php

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis/ajouter", name="avis/ajouter")
     */
    public function avisAjout(Request $request): Response
    {
        $avis = new Avis();

        $form = $this->createFormBuilder($avis)
            ->add('nom_user', TextType::class, array('label' => 'Nom d\'utilisateur'))
            ->add('titre', TextType::class)
            ->add('commentaire', TextareaType::class)
            ->add('submit', SubmitType::class, ['label' => 'Ajouter l\'avis'])
            ->getForm();

        if ($request->isMethod('POST'))
        {
            $form->submit($request->request->get($form->getName()));

            if ($form->isSubmitted() && $form->isValid())
            {
                $entityManager = $this->getDoctrine()->getManager();
                $avis = $form->getData();
                $entityManager->persist($avis);
                $entityManager->flush();
                
                unset($avis);
                unset($form);
                $avis = new Avis();
                $form = $this->createFormBuilder($avis)
                    ->add('nom_user', TextType::class, array('label' => 'Nom d\'utilisateur'))
                    ->add('titre', TextType::class)
                    ->add('commentaire', TextareaType::class)
                    ->add('submit', SubmitType::class, ['label' => 'Ajouter l\'avis'])
                    ->getForm();

                sleep(0.5);

                return $this->redirectToRoute('avis');
            }
        }

        return $this->render('avis/avisAjout.html.twig', [
            'controller_name' => 'AvisController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/avis", name="avis")
     */
    public function avis(): Response
    {
        $avis = $this->getDoctrine()
        ->getRepository(Avis::class)
        ->findAll();

        return $this->render('avis/avisListe.html.twig', [
            'controller_name' => 'AvisController',
            'avis' => $avis
        ]);
    }
}
