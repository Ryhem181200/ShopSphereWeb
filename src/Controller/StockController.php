<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\StockType;
use App\Repository\StockRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/stock')]
class StockController extends AbstractController
{
    #[Route('/', name: 'app_stock_index', methods: ['GET'])]
    public function index(StockRepository $stockRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $stocks = $this->getDoctrine()->getRepository(Stock::class)->findAll();
        $stocks = $paginator->paginate(
            $stocks, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
        2 /*limit per page*/
        );
        return $this->render('stock/list.html.twig', [
            'stocks' => $stocks,
        ]);
    }

    #[Route('/list', name: 'app_stockfront_index', methods: ['GET'])]
    public function indexFront(StockRepository $stockRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $stocks = $this->getDoctrine()->getRepository(Stock::class)->findAll();
        $stocks = $paginator->paginate(
            $stocks, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
        2 /*limit per page*/
        );
        return $this->render('stock/list_front.html.twig', [
            'stocks' => $stocks,
        ]);
    }

    #[Route('/new', name: 'app_stock_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('stock/new.html.twig', [
            'stock' => $stock,
            'form' => $form,
        ]);
    }

    #[Route('/{stockid}', name: 'app_stock_show', methods: ['GET'])]
    public function show(Stock $stock): Response
    {
        return $this->render('stock/show.html.twig', [
            'stock' => $stock,
        ]);
    }

    #[Route('/{stockid}/edit', name: 'app_stock_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Stock $stock, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('stock/edit.html.twig', [
            'stock' => $stock,
            'form' => $form,
        ]);
    }

    #[Route('/{stockid}', name: 'app_stock_delete', methods: ['POST'])]
    public function delete(Request $request, Stock $stock, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stock->getStockid(), $request->request->get('_token'))) {
            $entityManager->remove($stock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
    }



    #[Route('/admin/pdf', name: 'app_stock_pdf')]
    public function pdfgenrator(StockRepository $stockRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $stocks = $stockRepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('stock\pdf.html.twig', [
            'stocks' => $stocks,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

       

        return new Response (
            $dompdf->stream('Stocks.pdf"', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );

    }

    #[Route('/calendar/show', name: 'app_stock_calendar')]
    public function calendar(StockRepository $stockRepository): Response
    {
        $events = $stockRepository->findAll();

        $rdvs = [];

        foreach($events as $event){
            $color = '#808080';
            $textColor = '#ffffff';
            $rdvs[] = [
                'id' => $event->getStockid(),
                'start' => $event->getDaterestocks()->format('Y-m-d'),
                'backgroundColor' => $color,
                'textColor' => $textColor,
                
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('stock/calendar.html.twig', compact('data'));
    }

}
