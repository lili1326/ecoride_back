<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VueDetailCovoiturageController extends AbstractController
{
    #[Route('/vue/detail/covoiturage', name: 'app_vue_detail_covoiturage')]
    public function index(): Response
    {
        return $this->render('pages/vue_detail_covoiturage/index.html.twig', [
            'controller_name' => 'VueDetailCovoiturageController',
        ]);
    }
}