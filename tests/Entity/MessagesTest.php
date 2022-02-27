<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use DateTime;
use App\Entity\Messages;
use App\Entity\Utilisateurs;


class MessagesTest extends TestCase
{
// test de validité
public function testValide(): void
{
    $date = new DateTime();
    $utilisateurs = new Utilisateurs();
    $messages = new Messages();
    
    $messages->setTitre('titre du message')
        ->setSlug('slug du message')
        ->setMessage('le message')
        ->setCreatedAt($date)
        ->setUtilisateur($utilisateurs);

    $this->assertTrue($messages->getTitre() === "titre du message");
    $this->assertTrue($messages->getSlug() === "slug du message");
    $this->assertTrue($messages->getMessage() === "le message");
    $this->assertTrue($messages->getCreatedAt() === $date);
    $this->assertTrue($messages->getUtilisateur() === $utilisateurs);
}

// test des erreurs
public function testErreur(): void
{
    $messages = new Messages();
    $utilisateurs = new Utilisateurs();
    $date = new DateTime();

    $messages->setTitre('titre du message')
        ->setSlug('slug du message')
        ->setMessage('le message')
        ->setCreatedAt($date)
        ->setUtilisateur($utilisateurs);

    $this->assertFalse($messages->getTitre() !== "titre du message");
    $this->assertFalse($messages->getSlug() !== "slug du message");
    $this->assertFalse($messages->getMessage() !== "le message");
    $this->assertFalse($messages->getCreatedAt() !== $date);
    $this->assertFalse($messages->getUtilisateur() !== $utilisateurs);
}

// test des vides
public function testVide(): void
{
    $messages = new Messages();

             $this->assertEmpty($messages->getId());
    $this->assertEmpty($messages->getTitre());
    $this->assertEmpty($messages->getSlug());
    $this->assertEmpty($messages->getMessage());
    $this->assertEmpty($messages->getCreatedAt());
    $this->assertEmpty($messages->getUtilisateur());
}

}
