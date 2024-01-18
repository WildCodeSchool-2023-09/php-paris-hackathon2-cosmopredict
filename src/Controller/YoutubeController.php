<?php

namespace App\Controller;

use App\Service\YoutubeService;
use App\Repository\VideosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YoutubeController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function fetchVideos(VideosRepository $videosRepository): Response
    {
        $videosRepository->insertVideos();
        return $this->render('home/index.html.twig');
    }
}
