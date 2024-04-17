<?php

namespace App\Controller;

use App\Entity\Entrepot;
use App\Form\EntrepotType;
use App\Repository\EntrepotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/entrepot')]
class EntrepotController extends AbstractController
{
    #[Route('/', name: 'app_entrepot_index', methods: ['GET'])]
    public function index(EntrepotRepository $entrepotRepository): Response
    {
        return $this->render('entrepot/list.html.twig', [
            'entrepots' => $entrepotRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_entrepot_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entrepot = new Entrepot();
        $form = $this->createForm(EntrepotType::class, $entrepot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entrepot);
            $entityManager->flush();

            return $this->redirectToRoute('app_entrepot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entrepot/new.html.twig', [
            'entrepot' => $entrepot,
            'form' => $form,
        ]);
    }

    #[Route('/{entrepotid}', name: 'app_entrepot_show', methods: ['GET'])]
    public function show(Entrepot $entrepot): Response
    {
        return $this->render('entrepot/show.html.twig', [
            'entrepot' => $entrepot,
        ]);
    }

    #[Route('/{entrepotid}/edit', name: 'app_entrepot_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Entrepot $entrepot, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntrepotType::class, $entrepot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_entrepot_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('entrepot/edit.html.twig', [
            'entrepot' => $entrepot,
            'form' => $form,
        ]);
    }

    #[Route('/{entrepotid}', name: 'app_entrepot_delete', methods: ['POST'])]
    public function delete(Request $request, Entrepot $entrepot, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entrepot->getEntrepotid(), $request->request->get('_token'))) {
            $entityManager->remove($entrepot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_entrepot_index', [], Response::HTTP_SEE_OTHER);
    }
}
