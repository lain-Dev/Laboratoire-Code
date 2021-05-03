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
    public $age;

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
        $this->age = $age;
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


//j'appel la méthode(function presentation)
$employe1->presentation();
$employe2->presentation();
