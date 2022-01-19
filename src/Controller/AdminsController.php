<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminsController extends AbstractController
{
    /**
     * @Route("/admins", name="admins")
     */
    public function index(): Response
    {
        return $this->render('admins/index.html.twig', [
            'controller_name' => 'AdminsController',
        ]);
    }
}
