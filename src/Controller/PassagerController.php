<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PassagerController extends AbstractController
{
    #[Route('/passager', name: 'app_passager')]
    public function index(): Response
    {
        return $this->render('passager/index.html.twig', [
            'controller_name' => 'PassagerController',
        ]);
    }
}
