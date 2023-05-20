<?php

namespace App\Controller;

use App\Entity\CommandeVoitures;
use App\Form\CommandeVoituresType;
use App\Repository\CommandeVoituresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande/voitures')]
class CommandeVoituresController extends AbstractController
{
    #[Route('/', name: 'app_commande_voitures_index', methods: ['GET'])]
    public function index(CommandeVoituresRepository $commandeVoituresRepository): Response
    {
        return $this->render('commande_voitures/index.html.twig', [
            'commande_voitures' => $commandeVoituresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commande_voitures_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommandeVoituresRepository $commandeVoituresRepository): Response
    {
        $commandeVoiture = new CommandeVoitures();
        $form = $this->createForm(CommandeVoituresType::class, $commandeVoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeVoituresRepository->save($commandeVoiture, true);

            return $this->redirectToRoute('app_commande_voitures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_voitures/new.html.twig', [
            'commande_voiture' => $commandeVoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_voitures_show', methods: ['GET'])]
    public function show(CommandeVoitures $commandeVoiture): Response
    {
        return $this->render('commande_voitures/show.html.twig', [
            'commande_voiture' => $commandeVoiture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_voitures_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommandeVoitures $commandeVoiture, CommandeVoituresRepository $commandeVoituresRepository): Response
    {
        $form = $this->createForm(CommandeVoituresType::class, $commandeVoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeVoituresRepository->save($commandeVoiture, true);

            return $this->redirectToRoute('app_commande_voitures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_voitures/edit.html.twig', [
            'commande_voiture' => $commandeVoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_voitures_delete', methods: ['POST'])]
    public function delete(Request $request, CommandeVoitures $commandeVoiture, CommandeVoituresRepository $commandeVoituresRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeVoiture->getId(), $request->request->get('_token'))) {
            $commandeVoituresRepository->remove($commandeVoiture, true);
        }

        return $this->redirectToRoute('app_commande_voitures_index', [], Response::HTTP_SEE_OTHER);
    }
}
