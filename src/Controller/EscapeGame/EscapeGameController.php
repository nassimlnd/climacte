<?php

namespace App\Controller\EscapeGame;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/EscapeGame')]
class EscapeGameController extends AbstractController
{
    #[Route('/', name: 'app_start')]
    public function index(): Response
    {
        return $this->render('EscapeGame/Start.html.twig');
    }

    #[Route('/', name: 'app_start')]
    public function index(): Response
    {
        return $this->render('EscapeGame/Start.html.twig');
    }


}