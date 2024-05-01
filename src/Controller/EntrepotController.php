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
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/entrepot')]
class EntrepotController extends AbstractController
{
    #[Route('/', name: 'app_entrepot_index', methods: ['GET'])]
    public function index(EntrepotRepository $entrepotRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $entrepots = $this->getDoctrine()->getRepository(Entrepot::class)->findAll();
        $entrepots = $paginator->paginate(
            $entrepots, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
        2 /*limit per page*/
        );
        return $this->render('entrepot/list.html.twig', [
            'entrepots' => $entrepots,
        ]);
    }

    #[Route('/list', name: 'app_entrepotfront_index', methods: ['GET'])]
    public function indexFront(EntrepotRepository $entrepotRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $entrepots = $this->getDoctrine()->getRepository(Entrepot::class)->findAll();
        $entrepots = $paginator->paginate(
            $entrepots, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
        2 /*limit per page*/
        );
        return $this->render('entrepot/list_front.html.twig', [
            'entrepots' => $entrepots,
        ]);
    }

    #[Route('/new', name: 'app_entrepot_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $entrepot = new Entrepot();
        $form = $this->createForm(EntrepotType::class, $entrepot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entrepot);
            $entityManager->flush();
            $emailText = "A new entrepot has been added:\n"
                   . "Name: " . $entrepot->getNome() . "\n"
                   . "Location: " . $entrepot->getAdressee() . "\n";
        
            $emailHtml = "<p>A new entrepot has been added:</p>"
                   . "<ul>"
                   . "<li><strong>Name:</strong> " . $entrepot->getNome() . "</li>"
                   . "<li><strong>Location:</strong> " . $entrepot->getAdressee() . "</li>"
                   . "</ul>";
            $email = (new Email())
            ->from('hamatalbi9921@gmail.com')
            ->to('slimfady.hanafi@yahoo.fr') // Primary recipient
            ->subject('new Entrepot')
            ->text($emailText)
            ->html($emailHtml);
            $mailer->send($email);

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


    
    #[Route('/admin/reclamation/stats', name: 'app_entrepot_stats')]
    public function statistiques(EntrepotRepository $entrepotRepository)
    { $entrepot = $entrepotRepository->findAll();
       
       //
       $repository = $this->getDoctrine()->getRepository(Entrepot::class);
       $count= $repository->createQueryBuilder('u')
            ->select('count(u.statute)')
            ->groupby('u.statute')
            ->getQuery()
            ->getResult();

            $countdate= $repository->createQueryBuilder('a')
            ->select('(a.statute)')
            ->groupby('a.statute')
            ->getQuery()
            ->getResult();
        foreach($entrepot as $entrepot){

            $date[] = $entrepot->getStatute();

        }


            for ($i = 0; $i < count($count); ++$i){

                $count1[] = $count[$i][1] ;
                $countdate1[] = $countdate[$i][1];
            }


        return $this->render('entrepot/stats.html.twig', [
            'date' => json_encode($date ),
            'count1' => json_encode($count1),
            'countdate1' => json_encode($countdate1),
            


        ]);
    }


    #[Route('/admin/pdf', name: 'app_entrepot_pdf')]
    public function pdfgenrator(EntrepotRepository $entrepotRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $entrepots = $entrepotRepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('entrepot\pdf.html.twig', [
            'entrepots' => $entrepots,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

       

        return new Response (
            $dompdf->stream('Entrepots.pdf"', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );

    }

    

}
