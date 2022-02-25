<?php

namespace App\Controller;

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
=======
=======
>>>>>>> modou
use App\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< HEAD
>>>>>>> modou
=======
>>>>>>> modou
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthentificationController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
<<<<<<< HEAD
<<<<<<< HEAD
        //   if ($this->getUser()) {
        //       return $this->redirectToRoute('app_login');
        //  }
        //  else
        // Obtenir l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
=======
=======
>>>>>>> modou
        //  if ($this->getUser()) {
            //  return $this->redirectToRoute('');
        //  } else
            // Obtenir l'erreur de connexion s'il y en a une
            $error = $authenticationUtils->getLastAuthenticationError();
<<<<<<< HEAD
>>>>>>> modou
=======
>>>>>>> modou
        // dernier nom d'utilisateur saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
<<<<<<< HEAD
<<<<<<< HEAD
            'error' => $error]);
=======
            'error' => $error
        ]);
>>>>>>> modou
=======
            'error' => $error
        ]);
>>>>>>> modou
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
