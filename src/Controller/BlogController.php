<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/home', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig',['title' => "bienvenue",'age' => 187]);
    }
    #[Route('/blog/cv', name: 'app_cv')]
    public function cv() : Response 
    {
        return $this->render(
            'blog/cv.html.twig',[
                'title' => "cv",
            ]);
    }
    #[Route('/blog/plus', name: 'app_plus')]
    public function plus() : Response 
    {
        return $this->render(
            'blog/plus.html.twig',[
                'title' => "pour en savoir plus",
            ]);
    }
    #[Route('/blog/competence', name: 'app_competence')]
    public function competence() : Response 
    {
        return $this->render(
            'blog/competence.html.twig',[
                'title' => "Competence",
            ]);
    }
    #[Route('/blog/test', name: 'app_test')]
    public function test() : Response 
    {
        return $this->render(
            'blog/test.html.twig',[
                'title' => "test",
            ]);
    }

    #[Route('/blog/competence/RT1', name: 'RT1')]
    public function RT1() : Response 
    {
        return $this->render(
            'blog/RT1_administrer.html.twig',[
                'title' => "RT1",
            ]);
    }
    #[Route('/blog/competence/RT2', name: 'RT2')]
    public function RT2() : Response 
    {
        return $this->render(
            'blog/RT2_connecter.html.twig',[
                'title' => "RT2",
            ]);
    }
    #[Route('/blog/competence/RT3', name: 'RT3')]
    public function RT3() : Response 
    {
        return $this->render(
            'blog/RT3_creer.html.twig',[
                'title' => "RT3",
            ]);
    }
}