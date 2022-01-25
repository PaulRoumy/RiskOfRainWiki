<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends AbstractController
{
    #[Route('/item', name: 'item')]
    public function index(ItemRepository $itemRepository): Response
    {
        $communItems = $itemRepository->findBy(['rarete'=>'commun']);
        $rareItems = $itemRepository->findBy(['rarete'=>'rare']);
        $legendaireItems = $itemRepository->findBy(['rarete'=>'Legendaire']);
        $lunaireItems = $itemRepository->findBy(['rarete'=>'Lunaire']);
        $bossItems = $itemRepository->findBy(['rarete'=>'Boss']);
        return $this->render('item/index.html.twig', [
            'communItems' => $communItems,
            'rareItems' => $rareItems,
            'legendaireItems' => $legendaireItems,
            'lunaireItems' => $lunaireItems,
            'bossItems' => $bossItems
        ]);
    }
}
