<?php

namespace App\Controller;

use App\Service\YoutubeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YoutubeController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(YoutubeService $youTubeService): Response
    {

        $descriptions = $youTubeService->getVideoInfo();
        return $this->render('home/index.html.twig', ['descriptions'  => $descriptions,]);
    }
}
