<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Messages;
use App\Entity\Utilisateurs;
use DateTime;

class UtilisateursTest extends TestCase
{
// test validité
public function testSomethingtestValide(): void
{
    $utilisateurs = new Utilisateurs();
    $date = new DateTime();
    
$utilisateurs->setCivilite('la civilité')
->setNom('Ndao')
->setPrenom('Modou')
->setDateNaiss($date)
->setAdresse('mon adresse')
->setCodePostal('mon code postal')
->setVille('ma ville')
->setPays('mon pays')
->setTelephone('mon téléphone')
->setEmail('modou@free.fr')
->setPeriode('ma période')
->setLogin('mon login')
->setPassword('mot de passe')
->setConfirmepassword('confirmer mot de passe')
->setSlug('slug')
->setRoles([1]);

    $this->assertTrue($utilisateurs->getCivilite() === 'la civilité');
    $this->assertTrue($utilisateurs->getNom() === 'Ndao');
    $this->assertTrue($utilisateurs->getPrenom() === 'Modou');
    $this->assertTrue($utilisateurs->getDateNaiss() === $date);
    $this->assertTrue($utilisateurs->getAdresse() === 'mon adresse');
    $this->assertTrue($utilisateurs->getCodePostal() === 'mon code postal');
    $this->assertTrue($utilisateurs->getVille() === 'ma ville');
    $this->assertTrue($utilisateurs->getPays() === 'mon pays');
    $this->assertTrue($utilisateurs->getTelephone() === 'mon téléphone');
    $this->assertTrue($utilisateurs->getEmail() === 'modou@free.fr');
    $this->assertTrue($utilisateurs->getPeriode() === 'ma période');
    $this->assertTrue($utilisateurs->getLogin() === 'mon login');
    $this->assertTrue($utilisateurs->getPassword() === 'mot de passe');
    $this->assertTrue($utilisateurs->getConfirmepassword() === 'confirmer mot de passe');
    $this->assertTrue($utilisateurs->getSlug() === 'slug');
    $this->assertTrue($utilisateurs->getRoles() === [1]);
}

// test des erreurs
public function testErreur(): void
{
    $utilisateurs = new Utilisateurs();

    $date = new DateTime();


    
$utilisateurs->setCivilite('la civilité')
->setNom('Ndao')
->setPrenom('Modou')
->setDateNaiss($date)
->setAdresse('mon adresse')
->setCodePostal('mon code postal')
->setVille('ma ville')
->setPays('mon pays')
->setTelephone('mon téléphone')
->setEmail('modou@free.fr')
->setPeriode('ma période')
->setLogin('mon login')
->setPassword('mot de passe')
->setConfirmepassword('confirmer mot de passe')->setSlug('slug')
->setRoles([1]);

    $this->assertFalse($utilisateurs->getCivilite() !== 'la civilité');
    $this->assertFalse($utilisateurs->getNom() !== 'Ndao');
    $this->assertFalse($utilisateurs->getPrenom() !== 'Modou');
    $this->assertFalse($utilisateurs->getDateNaiss() !== $date);
    $this->assertFalse($utilisateurs->getAdresse() !== 'mon adresse');
    $this->assertFalse($utilisateurs->getCodePostal() !== 'mon code postal');
    $this->assertFalse($utilisateurs->getVille() !== 'ma ville');
    $this->assertFalse($utilisateurs->getPays() !== 'mon pays');
    $this->assertFalse($utilisateurs->getTelephone() !== 'mon téléphone');
    $this->assertFalse($utilisateurs->getEmail() !== 'modou@free.fr');
    $this->assertFalse($utilisateurs->getPeriode() !== 'ma période');
    $this->assertFalse($utilisateurs->getLogin() !== 'mon login');
    $this->assertFalse($utilisateurs->getPassword() !== 'mot de passe');
    $this->assertFalse($utilisateurs->getConfirmepassword() !== 'confirmer mot de passe');
    $this->assertFalse($utilisateurs->getSlug() !== 'slug');
    $this->assertFalse($utilisateurs->getRoles() !== [1]);
    
}

// test des vides
public function testVide(): void
{
    $utilisateurs = new Utilisateurs();

    $this->assertEmpty($utilisateurs->getId());
    $this->assertEmpty($utilisateurs->getCivilite());
    $this->assertEmpty($utilisateurs->getNom());
    $this->assertEmpty($utilisateurs->getPrenom());
    $this->assertEmpty($utilisateurs->getDateNaiss());
    $this->assertEmpty($utilisateurs->getAdresse());
    $this->assertEmpty($utilisateurs->getCodePostal());
    $this->assertEmpty($utilisateurs->getVille());
    $this->assertEmpty($utilisateurs->getPays());
    $this->assertEmpty($utilisateurs->getTelephone());
    $this->assertEmpty($utilisateurs->getEmail());
    $this->assertEmpty($utilisateurs->getPeriode());
    $this->assertEmpty($utilisateurs->getLogin());
    $this->assertEmpty($utilisateurs->getPassword());
    $this->assertEmpty($utilisateurs->getConfirmepassword());
    $this->assertEmpty($utilisateurs->getSlug());
    $this->assertEmpty($utilisateurs->getRoles());
    
}

// test ajout suppression et affichage de message
public function testAjoutSupprimeAfficheMessage(): void
{
    $utilisateurs = new Utilisateurs();
    $messages = new Messages();

    $this->assertEmpty($utilisateurs->getMessage());
    
    $utilisateurs->addMessage($messages);
    $this->assertContains($messages, $utilisateurs->getMessage());

    $utilisateurs->removeMessage($messages);
    $this->assertEmpty($utilisateurs->getMessage());
}

}
