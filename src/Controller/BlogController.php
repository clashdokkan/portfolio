<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render(
            'blog/home.html.twig',[
                'title' => "bienvenue",
                'age' => 187
            ]);
    }
    #[Route('/blog/cv', name: 'app_cv')]
    public function cv() : Response 
    {
        return $this->render(
            'blog/cv.html.twig',[
                'title' => "cv",
            ]);
    }
    
}