<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/utilisateurs")
 */
class UtilisateursController extends AbstractController
{
    /**
     * @Route("/", name="utilisateurs")
     */
    public function index(UtilisateursRepository $utilisateursRepo): Response
    {
        // recherche de tous les utilisateurs
        $utilisateursRepo = $this->getDoctrine()->getRepository(Utilisateurs::class);
        $utilisateurs = $utilisateursRepo->findAll();

        // affichage dans twig
        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
        }

        /**
         * @Route("/pageperso", name="pageperso", methods={"GET})
         */
        public function pageperso()
        {
            
        }
}
