<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reports')]
class ReportController extends AbstractController
{
    #[Route('/generate', name: 'app_report_generate', methods: ['GET', 'POST'])]
    public function generate(Request $request): Response
    {
        $url = $request->request->getString('url', $request->query->getString('url'));

        return $this->render('report/generate.html.twig', [
            'url' => $url,
        ]);
    }
}