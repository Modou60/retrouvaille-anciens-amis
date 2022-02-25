<?php

namespace App\Security;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Entity\user;
use App\Entity\Utilisateurs;
>>>>>>> modou
=======
use App\Entity\user;
use App\Entity\Utilisateurs;
>>>>>>> modou
=======
use App\Entity\user;
use App\Entity\Utilisateurs;
>>>>>>> modou
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
=======
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
>>>>>>> modou
=======
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
>>>>>>> modou
=======
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
>>>>>>> modou

class EmailVerifier
{
    private $verifyEmailHelper;
    private $mailer;
    private $entityManager;

    public function __construct(VerifyEmailHelperInterface $helper, MailerInterface $mailer, EntityManagerInterface $manager)
    {
        $this->verifyEmailHelper = $helper;
        $this->mailer = $mailer;
        $this->entityManager = $manager;
    }

    public function sendEmailConfirmation(string $verifyEmailRouteName, UserInterface $user, TemplatedEmail $email): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getId(),
            $user->getEmail(),
            ['id' => $user->getId()]
=======
=======
>>>>>>> modou
=======
>>>>>>> modou
        $user = new Utilisateurs();
        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getLogin(),
            $user->getEmail(),
            ['login' => $user->getLogin()]
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> modou
=======
>>>>>>> modou
=======
>>>>>>> modou
        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAtMessageKey'] = $signatureComponents->getExpirationMessageKey();
        $context['expiresAtMessageData'] = $signatureComponents->getExpirationMessageData();

        $email->context($context);

        $this->mailer->send($email);
    }

    /**
     * @throws VerifyEmailExceptionInterface
     */
    public function handleEmailConfirmation(Request $request, UserInterface $user): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());
=======
        $user = new Utilisateurs();
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getLogin(), $user->getEmail());
>>>>>>> modou
=======
        $user = new Utilisateurs();
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getLogin(), $user->getEmail());
>>>>>>> modou
=======
        $user = new Utilisateurs();
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getLogin(), $user->getEmail());
>>>>>>> modou

        $user->setIsVerified(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
