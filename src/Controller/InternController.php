<?php

namespace App\Controller;

use App\Entity\Intern;
use App\Form\InternType;
use App\Repository\InternRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\PdfExportService;
use App\Service\PdfSingleExportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/intern')]
class InternController extends AbstractController
{
    #[Route('/', name: 'app_intern_index', methods: ['GET'])]
    public function index(InternRepository $internRepository): Response
    {
        return $this->render('intern/index.html.twig', [
            'interns' => $internRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_intern_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $intern = new Intern();
        $form = $this->createForm(InternType::class, $intern);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($intern);
            $entityManager->flush();

            return $this->redirectToRoute('app_intern_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('intern/new.html.twig', [
            'intern' => $intern,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_intern_show', methods: ['GET'])]
    public function show(Intern $intern): Response
    {
        return $this->render('intern/show.html.twig', [
            'intern' => $intern,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_intern_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Intern $intern, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InternType::class, $intern);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_intern_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('intern/edit.html.twig', [
            'intern' => $intern,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_intern_delete', methods: ['POST'])]
    public function delete(Request $request, Intern $intern, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$intern->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($intern);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_intern_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/interns/export', name: 'intern_export_pdf')]
    public function exportInternsPdf(PdfExportService $pdfExportService, EntityManagerInterface $entityManager): Response {
        $interns = $entityManager->getRepository(Intern::class)->findAll();
        return $pdfExportService->generateInternsPdf($interns);
    } 
    #[Route('/intern/{id}/export', name: 'intern_export_single_pdf')]
    public function exportInternPdfSingle(Intern $intern, PdfSingleExportService $pdfExportService): Response {
        return $pdfExportService->generateInternPdf($intern);
    }
}

