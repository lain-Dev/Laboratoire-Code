<?php

//création de interface (définit une méthode qu'on veut rendre obligatoire)
interface Travailleur {
    public function travailler();
}

/**
 * la classe Employe
 * 
 * on définit ce qu'est un employé
 * 
 */
class Employe implements Travailleur
{
    //on appelle les propriétés d'une classe
    public $nom;
    public $prenom;
    //propriété protected n'est pas public, mais les classe qui hérite peuvent modifier
    protected $age;



    //les accesseurs et mutateurs permettent accés propriété privé
    //setAge pour but de recevoir age envoyé
    public function setAge($age)
    {
        //si age est un entier
        if(is_int($age) && $age > 18 && $age < 120) {
            $this->age = $age;
        }
        //on explique error avec message pesonnaliser pour comprendre error
        else
        {
            throw new Exception("l'age de l\'employé doit être un entier entre 18 et 120 !");
        }
    }

    //delivrer age de employé
    public function getAge() 
    {
        return $this->age;
    }

    public function travailler()
    {
        return "je suis un temployé et je travaille";
    }


    /**
     * __construct
     * 
     * methode "__construct" notion constructeur définir le comportement de employe 
     *
     * @param  string $nom
     * @param  string $prenom
     * @param  number $age
     * @return void
     */
    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        //on vérifie si age est correcte !!!!
        $this->setAge($age);
    }

    /**
     * presentation
     * 
     * on appelle pas une fonction mais une méthode de l'objet: presentation()
     *
     * @return void
     */
    public function presentation() 
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age");
    }
}



class Patron extends Employe
{
    public $voiture;

    public function __construct($nom, $prenom, $age, $voiture)
    {
        //on appel le construtor de la class parent (employe) pour reprendre le constructor
        parent::__construct($nom, $prenom, $age);
        $this->voiture = $voiture;
    }

    public function travailler()
    {
        return "je suis le patron et je bosse aussi !";
    }

    //on peut redéfinir la focntion en fonction de la classe
    public function presentation() 
    {
        var_dump("Salutation, je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une voiture !");
    }


    public function rouler()
    {
        var_dump("Bonjour, je roule avec ma $this->voiture !");
    }
}

//le "new" crée une une nouvelle instance de de la classe Employe
$employe1 = new Employe("lebon", "olivier", 37);//appel le constructeur
$employe2 = new Employe("ecormier", "valerie", 35);

$patron = new Patron("Bareigh", "erica", 40, "BMW");

//on veut changer age employé 01
$employe1->setAge(50);

class Etudiant implements Travailleur  {
    public function travailler() {
        return "je suis un étudiant et je revise !";
    }
}
//on crée un nouvel etudiant
$etudiant = new Etudiant();

//on choisi qui on veut faire travailler
faireTravailler($patron);
faireTravailler($etudiant);

//on fait implementer interface travailleur : notion ABSTRACTION
function faireTravailler(Travailleur $objet) 
{
    var_dump("Travails en cours : {$objet->travailler()}");
}