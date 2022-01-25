<?php

namespace App\Controller;

use App\Repository\MonstreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonstreController extends AbstractController
{
    #[Route('/monstre', name: 'monstre')]
    public function index(MonstreRepository $monstreRepository): Response
    {
        $monstreC = $monstreRepository->findBy(['type' => 'Commun']);
        $monstreB = $monstreRepository->findBy(['type' => 'Boss']);
        $monstreBS = $monstreRepository->findBy(['type' => 'Boss spéciaux']);
        $monstreA = $monstreRepository->findBy(['type' => 'Autre']);

        return $this->render('monstre.html.twig', [
            'monstreC' => $monstreC,
            'monstreB' => $monstreB,
            'monstreBS' => $monstreBS,
            'monstreA' => $monstreA
        ]);
    }
}