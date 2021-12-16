<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @var ContactRepository
     */

    private $contactRepository;

    public function __construct(ContactRepository $contactRepository){
        $this->contactRepository = $contactRepository;
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        // $name = $request->get('name');
        return $this->render('contact/index.html.twig', [
            'name' => 'Romain',
            'contacts' => $this->contactRepository->findAll()
        ]);
    }

    /**
     * @Route("/contact/{city}", name="contactCity")
     */
    public function city(string $city): Response 
    {
        return $this->render('contact/index.html.twig', [
            'name' => 'Romain',
            'city' => $city,
        ]);
    }

    /**
     * @Route("/contact/{id}", name="contactID")
     */
    public function id(string $id): Response
    {
        $id = $this->contactRepository->find($id);
        
        return $this->render('contact/index.html.twig', [
            'id' => $id,                                 
        ]);
    }
}
