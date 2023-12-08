<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function index(): Response
    {
        $data = [
            'question1' => [
                'id' => 1,
                'title' => "Quel gaz est principalement responsable du réchauffement climatique ?",
                'responses' => [
                    '1' => 'Oxygène',
                    '2' => 'Dioxyde de carbone (CO2)',
                    '3' => 'Azote',
                    '4' => 'Methane (CH4)',
                ],
                'rightAnswer' => 2
            ],
            'question2' => [
                'id' => 2,
                'title' => "Quelle est la principale source d'émissions de dioxyde de carbone ?",
                'responses' => [
                    '1' => "Utilisation de l'électricité",
                    '2' => 'Transport routier',
                    '3' => 'Déforestation',
                    '4' => 'Industrie',
                ],
                'rightAnswer' => 1
            ],
            'question3' => [
                'id' => 3,
                'title' => "Quelle est une source d'énergie renouvelable ?",
                'responses' => [
                    '1' => 'Charbon',
                    '2' => 'Pétrole',
                    '3' => 'Éolienne',
                    '4' => 'Gaz naturel ',
                ],
                'rightAnswer' => 3
            ],
            'question4' => [
                'id' => 4,
                'title' => "Quelle est une solution efficace pour réduire l'empreinte carbone liée à l'alimentation ?",
                'responses' => [
                    '1' => 'Manger plus de viande rouge',
                    '2' => 'Privilégier les produits locaux et de saison',
                    '3' => 'Ignorer les labels bio',
                    '4' => 'Utiliser des emballages plastiques',
                ],
                'rightAnswer' => 2
            ],
            'question5' => [
                'id' => 5,
                'title' => 'Quelle action individuelle contribue à la réduction des émissions de gaz à effet de serre ?',
                'responses' => [
                    '1' => 'Utiliser une voiture diesel',
                    '2' => "Consommer moins d'énergie à la maison",
                    '3' => 'Jeter les déchets dans la nature',
                    '4' => 'Acheter des produits à usage unique',
                ],
                'rightAnswer' => 2
            ],
        ];

        return $this->render('quiz/index.html.twig', [
            'data' => $data,
        ]);
    }


}
