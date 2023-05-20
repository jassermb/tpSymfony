<?php

namespace App\Controller;

use App\Entity\CommandeAccessoires;
use App\Form\CommandeAccessoiresType;
use App\Repository\CommandeAccessoiresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande/accessoires')]
class CommandeAccessoiresController extends AbstractController
{
    #[Route('/', name: 'app_commande_accessoires_index', methods: ['GET'])]
    public function index(CommandeAccessoiresRepository $commandeAccessoiresRepository): Response
    {
        return $this->render('commande_accessoires/index.html.twig', [
            'commande_accessoires' => $commandeAccessoiresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commande_accessoires_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommandeAccessoiresRepository $commandeAccessoiresRepository): Response
    {
        $commandeAccessoire = new CommandeAccessoires();
        $form = $this->createForm(CommandeAccessoiresType::class, $commandeAccessoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeAccessoiresRepository->save($commandeAccessoire, true);

            return $this->redirectToRoute('app_commande_accessoires_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_accessoires/new.html.twig', [
            'commande_accessoire' => $commandeAccessoire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_accessoires_show', methods: ['GET'])]
    public function show(CommandeAccessoires $commandeAccessoire): Response
    {
        return $this->render('commande_accessoires/show.html.twig', [
            'commande_accessoire' => $commandeAccessoire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_accessoires_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommandeAccessoires $commandeAccessoire, CommandeAccessoiresRepository $commandeAccessoiresRepository): Response
    {
        $form = $this->createForm(CommandeAccessoiresType::class, $commandeAccessoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeAccessoiresRepository->save($commandeAccessoire, true);

            return $this->redirectToRoute('app_commande_accessoires_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande_accessoires/edit.html.twig', [
            'commande_accessoire' => $commandeAccessoire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_accessoires_delete', methods: ['POST'])]
    public function delete(Request $request, CommandeAccessoires $commandeAccessoire, CommandeAccessoiresRepository $commandeAccessoiresRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commandeAccessoire->getId(), $request->request->get('_token'))) {
            $commandeAccessoiresRepository->remove($commandeAccessoire, true);
        }

        return $this->redirectToRoute('app_commande_accessoires_index', [], Response::HTTP_SEE_OTHER);
    }
}
