<?php

namespace App\Model;

class User
{
    public int $age;
    public array $films_favoris = [];
    public string $nom;

    /**
     * @param int $age
     * @param string $nom
     */
    public function __construct(int $age, string $nom)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function afficherNom(): string
    {
        return "Je m'appelle " . $this->nom . ".";
    }

    public function afficherAge(): string
    {
        return "J'ai " . $this->age . " ans.";
    }

    public function ajouterFilmsFavoris(string $film): bool
    {
        $this->films_favoris[] = $film;

        return true;
    }

    public function supprimerFilmsFavoris(string $films): bool
    {
        if (!in_array($film, $this->films_favoris)) throw new InvalidArgumentException("Film inconnu: " . $film);

        unset($this->fims_favoris[array_search($film, $this->films_favoris)]);

        return true;
    }
}
?>

<?php 
use PHPUnit\Framework\TestCase;
require 'Model/User.php';
use App\Model\User;

class UserTest extends TestCase
{

    // Les fonctions de test seront définies ici
    public function testAfficherNom()
    {
        $user = new User(18, 'John');

        $this->assertIsString($user->afficherNom());

        //Vérifier que le retour de la fonction contient le nom de l'utilisateur ("John")

        $this->assertStringContainsStringIgnoringCase('John', $user->afficherNom());

        //Vérifier que le message retourné par la fonction est correct

        $this->assertEquals("Je m'appelle John.", $user->afficherNom(), "Le nom de l'utilisateur n'est pas correct");
    }
}
?>

<?php

namespace App\Model;

class User
{
    //...

//Modifiez la fonction comme suit :
    public function afficherNom(): string
    {
        return "Je m'appelle " . $this->nom . " et j'ai " . $this->age . " ans.";
    }

   //...
}
