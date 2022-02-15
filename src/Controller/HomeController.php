<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Entity\Utilisateurs;
use App\Form\InscriptionType;
use App\Repository\UtilisateursRepository;
=======


// use App\Entity\Utilisateurs;

>>>>>>> modou
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Laminas\Code\Scanner\Util;
=======
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\TextType;
use Gedmo\Mapping\Annotation\Slug;
>>>>>>> modou

/**
 * @Route("/home")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
<<<<<<< HEAD
        
        return $this->render('home/index.html.twig', []);
    }

    // liste de tous les utilisateurs
    /**
     * @Route("/indexListe", name="indexListe")
     */
    public function indexListe(): Response
    {
        $requette = $this->getDoctrine()->getRepository(Utilisateurs::class);
        $utilisateurs = $requette->findAll();

        // envoi à la page twig
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);

    }

    // préparation du formulaire d'inscription et son affichage
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request, Utilisateurs $utilisateurs, EntityManagerInterface $manager): Response
    {
        $utilisateurs = new Utilisateurs();
        $form = $this->createForm(InscriptionType::class, $utilisateurs);
        $form->handleRequest($request);

        // test pour la validité du formulaire et sa persistance
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($utilisateurs);
            $manager->flush();

            // redirection de la page
            return $this->redirectToRoute('index');
        }

        // envoie de la page vers twig
        return $this->render('home/inscription1.html.twig', [
            'utilisateurs' => $utilisateurs,
            'utilisateurform1' => $form->createView(),
        ]);
=======
        return $this->render('home/index.html.twig', []);
    }

>>>>>>> modou
    }
