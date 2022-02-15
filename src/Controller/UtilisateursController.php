<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

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

    // affichage des données d'un utilisateur
    /**
     * @Route("/{slug}", name="pageperso", methods={"GET"})
     */
public function pagePerso(Request $request, EntityManagerInterface $entityManagerInterface): Response
{
    $utilisateurs = new Utilisateurs();
    $utilisateurs = $this->getUser()->getUsername();

    // Envoie à twig pour afficher ses informations
    return $this->render('utilisateurs/pageperso.html.twig', [
        'utilisateurs' => $utilisateurs,
    ]);
}

}