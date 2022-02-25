<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Email;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateursRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
<<<<<<< HEAD
<<<<<<< HEAD
// use google\mail;
=======
use google\mail;
>>>>>>> modou
=======
use google\mail;
>>>>>>> modou

class RegistrationController extends AbstractController
{

    private $emailVerifier;
    
    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $user = new Utilisateurs();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
=======
=======
>>>>>>> modou
         $user = new Utilisateurs();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the password
<<<<<<< HEAD
>>>>>>> modou
=======
>>>>>>> modou
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('ndao6516@gmail.com', 'Administrateur du site retrouvaille anciens amis'))
                    ->to($user->getEmail())
                    ->subject('Veuillez confirmer votre email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            

<<<<<<< HEAD
<<<<<<< HEAD
            return $this->redirectToRoute('utilisateurs');
=======
            return $this->redirectToRoute('app_login');
>>>>>>> modou
=======
            return $this->redirectToRoute('app_login');
>>>>>>> modou
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

// vérification du mail de l'utilisateur qui vient de s'inscrire
    /**
     * @Route("/verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request, UtilisateursRepository $utilisateursRepository): Response
    {
        $id = $request->get('id');

        if (null === $id) {
            return $this->redirectToRoute('app_register');
        }

        $user = $utilisateursRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('app_register');
        }

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->emailVerifier->handleEmailConfirmation($request, $user);
=======
            $this->emailVerifier->handleEmailConfirmation($request, $user, $id);
>>>>>>> modou
=======
            $this->emailVerifier->handleEmailConfirmation($request, $user, $id);
>>>>>>> modou
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse mail a bien été vérifié. Merci!');

<<<<<<< HEAD
<<<<<<< HEAD
        return $this->redirectToRoute('app_register');
=======
        return $this->redirectToRoute('index');
>>>>>>> modou
=======
        return $this->redirectToRoute('index');
>>>>>>> modou
    }
}
