<?php

namespace App\Controller;

use App\Service\PredictionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            return $this->redirectToRoute('app_chartjs');
        }

        return $this->render('home/index.html.twig', [
            'contentTitle' => 'Rechercher les futures tendances'
        ]);
    }

    #[Route('/predictions', name: 'predictions')]
    public function showPredictions(PredictionService $predictionService): Response
    {
        $predictions = $predictionService->predict([]);

        return $this->render('home/index.html.twig', [
            'prediction' => $predictions
        ]);
    }
}
