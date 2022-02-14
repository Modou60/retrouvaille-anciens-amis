<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/messages")
 */
class MessagesController extends AbstractController
{
    /**
     * @Route("/", name="messages")
     */
    public function index(MessagesRepository $messagesRepo): Response
    {
        // recherche de tous les messages
        $messages = new Messages();
        $messagesRepo = $this->getDoctrine()->getRepository(Messages::class);
        $messages = $messagesRepo->findAll();

        // affichage dans twig
        return $this->render('messages/index.html.twig', [
            'messages' => $messages,
        ]);
    }
}
