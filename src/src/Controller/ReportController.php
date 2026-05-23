<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reports')]
class ReportController extends AbstractController
{
    #[Route('/generate')]
    public function generate(): Response
    {
        $number = random_int(0, 100);

        return $this->render('report/generate.html.twig', [

        ]);
    }
}