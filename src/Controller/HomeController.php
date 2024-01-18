<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            return $this->render('home/result.html.twig', [
                'contentTitle' => 'Futures tendances - Prévisions',
                'form_data' => $_POST
            ]);
        }

        return $this->render('home/index.html.twig', [
            'contentTitle' => 'Rechercher les futures tendances'
        ]);
    }
}
