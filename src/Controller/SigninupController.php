<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SigninupController extends AbstractController
{
    #[Route('/signinup', name: 'app_signinup')]
    public function index(): Response
    {
        return $this->render('signinup/index.html.twig', [
            'controller_name' => 'SigninupController',
        ]);
    }
}
