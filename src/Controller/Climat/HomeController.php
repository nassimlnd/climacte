<?php

namespace App\Controller\Climat;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_acceuil')]
    public function index(): Response
    {
        return $this->render('Acceuil/acceuil.html.twig');
    }

}