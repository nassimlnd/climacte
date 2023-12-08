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

    #[Route('/entrer', name: 'app_entrer')]
    public function entrer(): Response
    {
        return $this->render('EscapeGame/Entrer.html.twig');
    }

    #[Route('/jardin', name: 'app_jardin')]
    public function jardin(): Response
    {
        return $this->render('EscapeGame/Jardin.html.twig');
    }

    #[Route('/maison', name: 'app_maison')]
    public function maison(): Response
    {
        return $this->render('EscapeGame/Maison.html.twig');
    }

    #[Route('/rosier', name: 'app_rosier')]
    public function rosier(): Response
    {
        return $this->render('EscapeGame/Rosier.html.twig');
    }

    #[Route('/cabane', name: 'app_cabane')]
    public function cabane(): Response
    {
        return $this->render('EscapeGame/Cabane.html.twig');
    }

}