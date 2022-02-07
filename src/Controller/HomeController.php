<?php

namespace App\Controller;



use App\Entity\Utilisateurs;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\TextType;
use Gedmo\Mapping\Annotation\Slug;

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
        return $this->render('home/index.html.twig', []);
    }

    // // affichage de tous les utilisateurs
    // /**
    //  * @Route("/indexListe", name="indexListe")
    //  */
    // public function listeUsers(): Response
    // {
    //     return $this->redirectToRoute('utilisateurs');
    // }

    // préparation du formulaire d'inscription et son affichage
    /**
     * @Route("/inscription", name="inscription", methods={"GET"})
     */
    public function inscription(): Response
    {
        // $utilisateurs = new Utilisateurs();
        // $form = $this->createForm(RegistrationFormType::class, $utilisateurs);
        // $form->handleRequest($request);

        // // test pour la validité du formulaire et sa persistance
        // if ($form->isSubmitted() && $form->isValid()) {
        //     $manager = $this->getDoctrine()->getManager();
        //     $manager->persist($utilisateurs);
        //     $manager->flush();

            // redirection de la page
            return $this->redirectToRoute('app_register');
        // }

    //     // envoie de la page vers twig
    //     return $this->render('home/inscription1.html.twig', [
    //         'utilisateurs' => $utilisateurs,
    //         'utilisateurform1' => $form->createView(),
    //     ]);
     }
}
