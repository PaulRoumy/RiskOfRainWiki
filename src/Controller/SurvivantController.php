<?php

namespace App\Controller;

use App\Repository\SurvivantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SurvivantController extends AbstractController
{
    #[Route('/survivant', name: 'survivant')]
    public function index(SurvivantRepository $SurvivantRepository): Response
    {
        $survivants = $SurvivantRepository
            ->findAll();
        return $this->render('survivant/index.html.twig', [
            'survivants' => $survivants
        ]);
    }
}