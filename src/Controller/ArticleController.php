<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'name' => 'Créer un article',
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function new(Request $request): Response 
    {
        $article = new Article();

        $form = $this->createFormBuilder($article)
                    ->add('name')
                    ->add('slug')
                    ->add('content')
                    ->getForm();
        
        return $this->render('article/index.html.twig', [
            'formArticle' => $form
        ]);       
        
    }
}
