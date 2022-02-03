<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Utilisateurs;
use App\Form\InscriptionType;

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
        return $this->render('home/index.html.twig', [
        ]);
    }

    // préparation du formulaire d'inscription et son affichage
    /**
     * @Route("/inscription", name="inscription", methods={"GET", "POST"})
     */
    public function inscription(Request $request): Response
    {
        $utilisateurs = new Utilisateurs();
        $form = $this->createForm(InscriptionType::class , $utilisateurs);
        $form->handleRequest($request);

        // test pour la validité du formulaire et sa persistance
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($utilisateurs);
            $manager->flush();

            // redirection de la page
            return $this->redirectToRoute('index');
        }

        // envoie de la page vers twig
        return $this->render('home/inscription1.html.twig', [
            'utilisateurs' => $utilisateur,
            'utilisateurform1' => $form->createView(),
        ]);
    }
}
