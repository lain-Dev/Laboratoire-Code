<?php

/**
 * la classe Employe
 * 
 * on définit ce qu'est un employé
 * 
 */
class Employe 
{
    //on appelle les propriétés d'une classe
    public $nom;
    public $prenom;
    //propriété ne peut être touché que dans la classe
    private $age;



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

//le "new" crée une une nouvelle instance de de la classe Employe
$employe1 = new Employe("lebon", "olivier", 37);//appel le constructeur
$employe2 = new Employe("ecormier", "valerie", 35);

//on veut changer age employé 01
$employe1->setAge(50);


//j'appel la méthode(function presentation)
$employe1->presentation();

