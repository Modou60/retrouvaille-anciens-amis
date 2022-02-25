<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
<<<<<<< HEAD
=======
use LDAP\Result;
>>>>>>> modou
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
<<<<<<< HEAD
=======

use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;
>>>>>>> modou

/**
 * @Route("/utilisateurs")
 */
class UtilisateursController extends AbstractController
{
    /**
     * @Route("/", name="utilisateurs")
     */
<<<<<<< HEAD
    public function index(UtilisateursRepository $utilisateursRepo): Response
    {
        // recherche de tous les utilisateurs
        $utilisateursRepo = $this->getDoctrine()->getRepository(Utilisateurs::class);
=======
public function index(UtilisateursRepository $utilisateursRepo): Response
    {
        
        // recherche de tous les utilisateurs
        
>>>>>>> modou
        $utilisateurs = $utilisateursRepo->findAll();

        // affichage dans twig
        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    // affichage des données d'un utilisateur
    /**
<<<<<<< HEAD
     * @Route("/{slug}", name="pageperso", methods={"GET"})
     */
public function pagePerso(Request $request, EntityManagerInterface $entityManagerInterface): Response
{
    $utilisateurs = new Utilisateurs();
    $utilisateurs = $this->getUser()->getUsername();

    // Envoie à twig pour afficher ses informations
    return $this->render('utilisateurs/pageperso.html.twig', [
=======
     * @Route("/{login}", name="utilisateur_perso", methods={"GET"})
     */
public function pagePerso(Utilisateurs $utilisateurs, $login): Response
{
    // Envoie à twig pour afficher ses informations
    return $this->render('utilisateurs/pageperso.html.twig', [
        'utilisateur' => $utilisateurs,
    ]);
}

/**
 * @Route("/accueil_perso/{login}", name="accueil_perso", methods={"GET"})
 */
public function accueil(Utilisateurs $utilisateurs, $login): Response
{
    return $this->render('utilisateurs/accueil_perso.html.twig', [
>>>>>>> modou
        'utilisateurs' => $utilisateurs,
    ]);
}

}