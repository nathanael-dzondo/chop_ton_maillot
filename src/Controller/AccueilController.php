<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        $maillots = [
            [
                'nom' => 'Maillot PSG Domicile',
                'prix' => 89.99,
                'image' => 'https://via.placeholder.com/250x300',
            ],
            [
                'nom' => 'Maillot Real Madrid',
                'prix' => 94.99,
                'image' => 'https://via.placeholder.com/250x300',
            ],
            [
                'nom' => 'Maillot FC Barcelone',
                'prix' => 92.99,
                'image' => 'https://via.placeholder.com/250x300',
            ],
        ];

        return $this->render('accueil/index.html.twig', [
            'maillots' => $maillots,
        ]);
    }
}