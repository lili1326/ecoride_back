<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ModifPasswordController extends AbstractController
{
    #[Route('/modif/password', name: 'app_modif_password')]
    public function index(): Response
    {
        return $this->render('modif_password/index.html.twig', [
            'controller_name' => 'ModifPasswordController',
        ]);
    }
}
