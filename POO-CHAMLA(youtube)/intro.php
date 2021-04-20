<?php

/**
 * Employe
 */
class Employe 
{
    //on appelle les prppriétés d'une classe
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
     * on appelle pas une fonction mais une méthode: presentation()
     *
     * @return void
     */
    public function presentation() 
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age");
    }
}

//le "new" crée une une nouvelle instance de objet
$employe1 = new employe("lebon", "olivier", 37);//appel le constructeur


$employe2 = new employe("ecormier", "valerie", 35);


//j'appel la méthode(function presentation)
$employe1->presentation();
$employe2->presentation();
