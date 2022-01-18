<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonstreController extends AbstractController
{
    #[Route('/monstre', name: 'monstre')]
    public function index(): Response
    {
        return $this->render('monstre.html.twig', [
            'controller_name' => 'MonstreController',
        ]);
    }
}