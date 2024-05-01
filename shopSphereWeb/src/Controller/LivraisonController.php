<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Twilio\Rest\Client;
#[Route('/livraison')]
class LivraisonController extends AbstractController
{
    #[Route('/', name: 'app_livraison_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $livraisons = $entityManager
            ->getRepository(Livraison::class)
            ->findAll();

        return $this->render('livraison/index.html.twig', [
            'livraisons' => $livraisons,
        ]);
    }
     #[Route('/affichfront', name: 'app_livraison_affichfront', methods: ['GET'])]
    public function affichfront(EntityManagerInterface $entityManager): Response
    {
        $livraisons = $entityManager
            ->getRepository(Livraison::class)
            ->findAll();

        return $this->render('livraison/affichfront.html.twig', [
            'livraisons' => $livraisons,
        ]);
    }

  #[Route('/new', name: 'app_livraison_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, LoggerInterface $logger): Response
{
    $livraison = new Livraison();
    $form = $this->createForm(LivraisonType::class, $livraison);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($livraison);
        $entityManager->flush();

        // Initialize Twilio client
        $twilioSid = 'ACfb328d729f3c8929e3910b0ab9d6fea3';
        $twilioAuthToken = 'a53732a6fb69fe9e3f5d06e31e720e44';
        $twilioFromNumber = 'HD6BCUU9Y6UFC9N3E3Z6K122';
        $client = new Client($twilioSid, $twilioAuthToken);

        // Compose SMS message
        $message = "Hello, a new delivery with ID {$livraison->getIdlivraison()} has been created.";

        try {
            // Send SMS message
            $client->messages->create(
                // Recipient's phone number
                '27894925',
                [
                    // Sender's phone number (Twilio phone number)
                    'from' => $twilioFromNumber,
                    // SMS message body
                    'body' => $message,
                ]
            );

            // Log success message
            $this->addFlash('success', 'SMS sent successfully');
        } catch (\Exception $e) {
            // Log detailed error message
            $this->addFlash('error', 'Failed to send SMS: ' . $e->getMessage());
            // Log this error to a file or error monitoring service
            $logger->error('SMS sending error: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('livraison/new.html.twig', [
        'livraison' => $livraison,
        'form' => $form,
    ]);
}

  #[Route('/trielivraison', name:'app_trie_livraison', methods: ['GET'])]
public function trierCommandeParEvenement(EntityManagerInterface $entityManager, Request $request): Response
{
    if ($request->isXmlHttpRequest()) {
        // Récupérer les paramètres de tri depuis la requête AJAX
        $tri = $request->query->get('tri');

        // Votre logique de tri des commandes en fonction des paramètres reçus
        if ($tri === 'ASC') { // Changer ASC à DESC pour trier de façon descendante
            $livraisons = $entityManager
                ->getRepository(Livraison::class)
                ->findBy([], ['idlivraison' => 'DESC']); // Changer DESC à ASC pour trier de façon descendante
        } else {
            $livraisons = $entityManager
                ->getRepository(Livraison::class)
                ->findBy([], ['idlivraison' => 'ASC']);
        }

        // Convertir les données triées en JSON et les renvoyer
        return $this->json($livraisons);
    }

    // Si ce n'est pas une requête AJAX, renvoyer la page HTML normale
    $livraisons = $entityManager
        ->getRepository(Livraison::class)
        ->findBy([], ['idlivraison' => 'DESC']);

    return $this->render('livraison/affichfront.html.twig', [
        'livraisons' => $livraisons,
    ]);
}
    #[Route('/{idlivraison}', name: 'app_livraison_show', methods: ['GET'])]
    public function show(Livraison $livraison): Response
    {
        return $this->render('livraison/show.html.twig', [
            'livraison' => $livraison,
        ]);
    }
 #[Route('/showfront/{idlivraison}', name: 'app_livraison_showfront', methods: ['GET'])]
    public function showfront(Livraison $livraison): Response
    {
        return $this->render('livraison/showfront.html.twig', [
            'livraison' => $livraison,
        ]);
    }
    #[Route('/{idlivraison}/edit', name: 'app_livraison_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livraison/edit.html.twig', [
            'livraison' => $livraison,
            'form' => $form,
        ]);
    }

    #[Route('/{idlivraison}', name: 'app_livraison_delete', methods: ['POST'])]
    public function delete(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getIdlivraison(), $request->request->get('_token'))) {
            $entityManager->remove($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
    }
}
