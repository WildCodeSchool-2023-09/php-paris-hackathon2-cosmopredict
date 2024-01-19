<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Model\Chart;

class ChartController extends AbstractController
{
    #[Route('/chartjs', name: 'app_chartjs')]
    public function chartjs(ChartBuilderInterface $chartBuilder)
    {
        // $param1 = '2020-01-01';
        // $param2 = '2020-12-31';
        // $data = $videosRepository->avoirLlesdOoneerpArmOi($param1, $param2);
        // $result = [];
        // $year = substr($param1, 0, 4);
        // $monthStart = intval(substr($param1, 5, 7));
        // $monthEnd = intval(substr($param2, 5, 7));
        // if(strlen($monthStart) === 1){
        //     $monthStart = '0' . $monthStart;
        // }
        // if(strlen($monthEnd) === 1){
        //     $monthEnd = '0' . $monthEnd;
        // }
        // foreach($data as $video){
        //     for($i = $monthStart; $i <= $monthEnd; $i++){
        //         if(str_contains($video->getUploadDate(), $year.'-'.$i)){
        //             $result[$i][] = $video->getDescription();
        //         }
        //     }
        // }
        // var_dump($result);die();
        // $total= 0;
        // for($i = array_key_first($result); $i != array_key_last($result); $i++){
        //     foreach($result[$i] as $month){
        //         $total += substr_count($month, 'Caudalie');
        //     }
        // }

        
        // var_dump($total);
        // die();

        $brandChart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $brandChart->setData([
            'labels' => ['Avril 2023', 'Mai 2023', 'Juin 2023', 'Juillet 2023', 'Août 2023', 'Septembre 2023', 'Octobre 2023', 'Novembre 2023', 'Décembre 2023', 'Janvier 2024', 'Février 2024', 'Mars 2024'],
            'datasets' => [
                [
                    'label' => 'L\'Oréal (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(3,9), rand(7,12), rand(10,15), rand(19,24), rand(3,9), rand(11,14), rand(3,8), rand(3,5), rand(10,16), rand(24,30), rand(29, 35), rand(50,59)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Channel (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(6,18), rand(12,19), rand(18,22), rand(24,28), rand(9,13), rand(5,14), rand(13,18), rand(13,15), rand(16,19), rand(34,39), rand(39, 45), rand(60,69)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Dior (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(23, 29), rand(22,26), rand(15,21), rand(10,24), rand(3,9), rand(11,17), rand(13,20), rand(23,25), rand(30,36), rand(34,40), rand(49, 55), rand(38,42)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Clarins (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(15,21), rand(18,24), rand(20,26), rand(25,30), rand(14,18), rand(12,15), rand(16,22), rand(20,23), rand(28,34), rand(35,42), rand(40,47), rand(55,63)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Yves Saint-Laurent (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(8,15), rand(10,17), rand(14,20), rand(18,22), rand(9,13), rand(6,12), rand(10,15), rand(12,15), rand(16,20), rand(22,28), rand(25,32), rand(35,40)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Guerlain (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(20,26), rand(22,28), rand(25,30), rand(28,34), rand(15,20), rand(14,18), rand(18,23), rand(22,25), rand(30,35), rand(38,45), rand(42,48), rand(55,62)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Caudalie (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(10,16), rand(12,18), rand(15,21), rand(20,25), rand(8,14), rand(9,13), rand(11,16), rand(15,18), rand(18,22), rand(25,30), rand(28,35), rand(38,45)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'La Roche-Posay (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(5,11), rand(8,15), rand(10,16), rand(14,18), rand(6,10), rand(5,9), rand(8,12), rand(10,13), rand(12,16), rand(18,23), rand(20,25), rand(28,34)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Vichy (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(12,18), rand(15,21), rand(18,24), rand(20,26), rand(10,14), rand(8,12), rand(12,17), rand(14,17), rand(16,20), rand(22,28), rand(25,32), rand(30,38)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Nuxe (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(18,24), rand(20,26), rand(22,28), rand(25,30), rand(15,19), rand(14,18), rand(16,21), rand(20,23), rand(25,30), rand(32,38), rand(35,42), rand(48,55)],
                    'tension' => 0.5,
                ],
            ],
        ]);
        $brandChart->setOptions([
            'maintainAspectRatio' => true,
        ]);
        $productChart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $productChart->setData([
            'labels' => ['Avril 2023', 'Mai 2023', 'Juin 2023', 'Juillet 2023', 'Août 2023', 'Septembre 2023', 'Octobre 2023', 'Novembre 2023', 'Décembre 2023', 'Janvier 2024', 'Février 2024', 'Mars 2024'],
            'datasets' => [
                [
                    'label' => 'Fond de teint (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(25,32), rand(28,35), rand(30,38), rand(35,42), rand(20,26), rand(18,24), rand(22,28), rand(25,30), rand(32,38), rand(40,45), rand(45,52), rand(55,62)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Mascara (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(15,22), rand(18,24), rand(22,28), rand(25,30), rand(12,16), rand(10,15), rand(14,20), rand(16,19), rand(20,25), rand(28,34), rand(32,38), rand(42,48)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Rouge à lèvres (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(20,26), rand(22,28), rand(25,32), rand(28,35), rand(15,20), rand(14,18), rand(18,24), rand(22,26), rand(28,34), rand(35,40), rand(38,45), rand(50,57)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Crème hydratante (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(30,36), rand(35,42), rand(38,45), rand(40,48), rand(25,30), rand(22,28), rand(28,35), rand(32,38), rand(36,42), rand(45,50), rand(48,55), rand(60,68)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Fard à paupières (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(18,24), rand(20,26), rand(24,30), rand(28,34), rand(15,19), rand(14,18), rand(18,23), rand(20,24), rand(25,30), rand(32,38), rand(38,45), rand(45,52)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Soin anti-âge (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(12,18), rand(15,21), rand(18,24), rand(20,26), rand(10,14), rand(9,13), rand(12,17), rand(14,17), rand(16,20), rand(22,28), rand(25,32), rand(30,38)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Exfoliant (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(8,15), rand(10,17), rand(14,20), rand(18,22), rand(9,13), rand(6,12), rand(10,15), rand(12,15), rand(16,20), rand(22,28), rand(25,32), rand(35,40)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Soin solaire (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(10,16), rand(12,18), rand(15,21), rand(20,25), rand(8,14), rand(9,13), rand(11,16), rand(15,18), rand(18,22), rand(25,30), rand(28,35), rand(38,45)],
                    'tension' => 0.5,
                ],
                [
                    'label' => 'Eau micellaire (par milliers)',
                    'backgroundColor' => 'lightblue',
                    'borderColor' => 'blue',
                    'data' => [rand(22,28), rand(25,32), rand(28,35), rand(30,38), rand(18,24), rand(16,20), rand(20,26), rand(24,28), rand(30,35), rand(38,44), rand(42,49), rand(55,62)],
                    'tension' => 0.5,
                ],
            ],
        ]);
        $productChart->setOptions([
            'maintainAspectRatio' => true,
        ]);

        return $this->render('home/result.html.twig', ['brandChart' => $brandChart, 'productChart' => $productChart, 'contentTitle' => 'Futures tendances - Prévisions']);
    }


}