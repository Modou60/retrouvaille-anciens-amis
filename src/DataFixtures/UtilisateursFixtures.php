<?php

namespace App\DataFixtures;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

use DateTime;
=======
>>>>>>> modou
=======
>>>>>>> modou
=======
>>>>>>> modou
=======
>>>>>>> modou
use App\Entity\Messages;
use App\Entity\Utilisateurs;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Role\Role;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // je remplis les utilisateurs
        for ($i = 1; $i < 200; $i++) {
            $utilisateurs = new Utilisateurs();
            $civilite = ["Mme", "Mlle", "M."];
            shuffle($civilite);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$nom = ["NDAO", "NDIAYE", "DIOP", "SALL", "FALL", "FAYE", "LO", "NDOUR", "GUIYE", "TALL", "SENE", "BA", "KA"];
shuffle($nom);
$prenom = ["Modou", "Dame", "Khady", "Fatou", "Mamadou", "Mouhammad", "Diarra", "Sokhna", "Samba", "Bathi", "Oumar", "Serigne", "Mamour", "Saliou", "Awa", "Cheikh", "Daba"];
shuffle($prenom);
$ville = ["Dakar", "Kaolack", "Lyon", "Diourbel", "Thiès", "Touba", "Tiwaouane", "Mbour", "Paris", "Metz", "Casa", "Pout", "Saint-Louis", "Clermont-Ferrand", "Lille"];
shuffle($ville);
$pays = ["Sénégal", "Maroc", "France"];
shuffle($pays);
$email = ["toto@free.fr", "M.ba@orange.sn", "d.fall@gmail.com", "lala@sfr.fr", "ssall@gmail.com", "soleil@orange.sn", "s.sene@yahoo.fr", "rara@yahoo.sn", "terre@orange.fr", "samfaye@gmail.com", "loumou@free.sn", "sarr@hotmail.fr"];
shuffle($email);
$date = new DateTime();
            $utilisateurs
            ->setCivilite($civilite[0])
            ->setNom($nom[0])
            ->setPrenom($prenom[0])
            ->setDateNaiss($date)
            ->setAdresse('adresse' . $i)
            ->setVille($ville[0])
            ->setCodePostal('codepostal' . $i)
            ->setPays($pays[0])
            ->setTelephone('téléphone' . $i)
            ->setEmail($email[0] . $i)
            ->setPeriode('période' . $i)
            ->setLogin('login' . $i)
            ->setPassword('motdepasse' . $i)
            ->setRoles(['ROLE_ADMIN']);
            $manager->persist($utilisateurs);    
        

    // je remplis les messages pour chaque utilisateur

    for ($j = 1; $j <= 200; $j++)
    {
        $date = new DateTime();
        $messages = new Messages();

        $messages
            ->setTitre('Titre numéro ' . $j)
            ->setMessage('Message numéro ' . $j)
            ->setCreatedAt($date)
            ->setUtilisateur($utilisateurs);
            $manager->persist($messages);
=======
=======
>>>>>>> modou
=======
>>>>>>> modou
=======
>>>>>>> modou
            $nom = ["NDAO", "NDIAYE", "DIOP", "SALL", "FALL", "FAYE", "LO", "NDOUR", "GUIYE", "TALL", "SENE", "BA", "KA"];
            shuffle($nom);
            $prenom = ["Modou", "Dame", "Khady", "Fatou", "Mamadou", "Mouhammad", "Diarra", "Sokhna", "Samba", "Bathi", "Oumar", "Serigne", "Mamour", "Saliou", "Awa", "Cheikh", "Daba"];
            shuffle($prenom);
            $ville = ["Dakar", "Kaolack", "Lyon", "Diourbel", "Thiès", "Touba", "Tiwaouane", "Mbour", "Paris", "Metz", "Casa", "Pout", "Saint-Louis", "Clermont-Ferrand", "Lille"];
            shuffle($ville);
            $pays = ["Sénégal", "Maroc", "France"];
            shuffle($pays);
            $email = ["toto@free.fr", "M.ba@orange.sn", "d.fall@gmail.com", "lala@sfr.fr", "ssall@gmail.com", "soleil@orange.sn", "s.sene@yahoo.fr", "rara@yahoo.sn", "terre@orange.fr", "samfaye@gmail.com", "loumou@free.sn", "sarr@hotmail.fr"];
            shuffle($email);

            $utilisateurs
                ->setCivilite($civilite[0])
                ->setNom($nom[0])
                ->setPrenom($prenom[0])
                ->setDateNaiss(new \DateTime())
                ->setAdresse('adresse' . $i)
                ->setVille($ville[0])
                ->setCodePostal('codepostal' . $i)
                ->setPays($pays[0])
                ->setTelephone('téléphone' . $i)
                ->setEmail($email[0] . $i)
                ->setPeriode('période' . $i)
                ->setLogin('login' . $i)
                ->setPassword('motdepasse' . $i);
            // ->setRoles(['ROLE_ADMIN'])
            $manager->persist($utilisateurs);
    
        // je remplis les messages
        
            $messages = new Messages();
            $messages
                ->setTitre('Titre ' . $i)
                ->setMessage('Message ' . $i)
                ->setCreatedAt(new \DateTime())
                ->setUtilisateur($utilisateurs);
            $manager->persist($messages);
        
        $manager->flush();
>>>>>>> modou
    }
    }   
}
$manager->flush();
    }
}