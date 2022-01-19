<?php

namespace App\Controller;

use App\Repository\ArtefactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArtefactController extends AbstractController
{
    #[Route('/artefact', name: 'artefact')]
    public function index(ArtefactRepository $artefactRepository): Response
    {
        $artefacts = $artefactRepository
            ->findAll();
        return $this->render('artefact/index.html.twig', [
            'artefacts' => $artefacts
        ]);
    }
}
