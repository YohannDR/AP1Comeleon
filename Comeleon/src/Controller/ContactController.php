<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Contact;

class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        return $this->render('contact/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        /*
        if ($request->request->count() > 0) {
            $contact = new Contact();
            $contact->setNom($request->request->get('nom'))
                    ->setPrenom($request->request->get('prenom'))
                    ->setMail($request->request->get('mail'))
                    ->setTelephone($request->request->get('telephone'))
                    ->setDescription($request->request->get('description'))
                    ->setCreatedAt(new \DateTime());
            $manager->persist($contact);
            $manager->flush();

            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/contact.html.twig'); */

        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
                     ->add('nom')
                     ->add('prenom')
                     ->add('mail')
                     ->add('telephone')
                     ->add('description')
                     ->getForm();

        return $this->render('contact/contact.html.twig', [
            'formContact' => $form->createView()
        ]);
    }
}
