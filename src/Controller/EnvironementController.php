<?php

namespace App\Controller;

use App\Repository\EnvironementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnvironementController extends AbstractController
{
    #[Route('/environement', name: 'environement')]
    public function index(EnvironementRepository $environementRepository): Response
    {
        $zone1 = $environementRepository->findBy(['zone'=>1]);
        $zone2 = $environementRepository->findBy(['zone'=>2]);
        $zone3 = $environementRepository->findBy(['zone'=>3]);
        $zone4 = $environementRepository->findBy(['zone'=>4]);
        $zone5 = $environementRepository->findBy(['zone'=>5]);
        $zone6 = $environementRepository->findBy(['zone'=>6]);
        $zoneSecret = $environementRepository->findBy(['zone'=>0]);
        return $this->render('environement/index.html.twig',[
                'zone1' => $zone1,
                'zone2' => $zone2,
                'zone3' => $zone3,
                'zone4' => $zone4,
                'zone5' => $zone5,
                'zone6' => $zone6,
                'zoneSecret' => $zoneSecret,
            ]
        );
    }
}
