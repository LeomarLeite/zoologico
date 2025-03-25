<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index() : Response
    {
        $users = [
            ['nome' => 'João', 'idade' => 20],
            ['nome' => 'Maria', 'idade' => 30],
            ['nome' => 'Pedro', 'idade' => 40],
            ['nome' => 'Lucas', 'idade' => 50],
            ['nome' => 'Ana', 'idade' => 60],
            ['nome' => 'Paulo', 'idade' => 70],
        ];


        return $this->render('hello/homepage.html.twig',[
            'title' => 'Zoologico',
            'users' => $users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal($slug=null) : Response
    {

        return new Response('Olá !'.$slug);
    }
}
