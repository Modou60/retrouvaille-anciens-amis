<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManagerInterface;
use LDAP\Result;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;
use App\Entity\Messages;

/**
 * @Route("/utilisateurs")
 */
class UtilisateursController extends AbstractController
{
    /**
     * @Route("/", name="utilisateurs")
     */public function index(UtilisateursRepository $utilisateursRepo): Response
    {

        // recherche de tous les utilisateurs

        $utilisateurs = $utilisateursRepo->findAll();

        // affichage dans twig
        return $this->render('utilisateurs/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    
    
    /**
     * @Route("/accueil_perso/{slug}", name="accueil_perso")
     */
    public function accueil(string $slug): Response
    {
        $utilisateurs = new Utilisateurs();
        return $this->render('utilisateurs/accueil_perso.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

// affichage des données d'un utilisateur
    /**
     * @Route("/{slug}", name="utilisateur_perso", methods={"GET"})
     */
    public function pagePerso(string $slug): Response
    {
        $utilisateurs = new Utilisateurs();
        // Envoie à twig pour afficher ses informations
        return $this->render('utilisateurs/pageperso.html.twig', [
            'utilisateur' => $utilisateurs,
        ]);
    }


}