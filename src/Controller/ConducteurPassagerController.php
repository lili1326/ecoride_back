<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConducteurPassagerController extends AbstractController
{
    #[Route('/conducteur/passager', name: 'app_conducteur_passager')]
    public function index(): Response
    {
        return $this->render('pages/conducteur_passager/index.html.twig', [
            'controller_name' => 'ConducteurPassagerController',
        ]);
    }
}