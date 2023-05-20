<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    #[Route('/Acceuil', name: 'app_Acceuil')]
    public function Acceuil(): Response
    {
        return $this->render('pages/Acceuil.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    #[Route('/Voitures', name: 'app_Voitures')]
    public function Boutique(): Response
    {
        return $this->render('pages/Voiture.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
   
    #[Route('/Accessoires', name: 'app_Services')]
    public function Accessoires(): Response
    {
        return $this->render('pages/Accessoire.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
  
}
