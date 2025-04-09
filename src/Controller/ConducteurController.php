<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConducteurController extends AbstractController
{
    #[Route('/conducteur', name: 'app_conducteur')]
    public function index(): Response
    {
        return $this->render('conducteur/index.html.twig', [
            'controller_name' => 'ConducteurController',
        ]);
    }
}
