<?php

class Client {

    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;

    private array $_comptes;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){

        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = new DateTime($dateNaissance);
        $this -> _ville = $ville;
    
        $this -> _comptes = [];

    }

    public function __toString(){

        return $this->_nom." ".$this->_prenom." ".$this->_dateNaissance->format("d/m/Y")." ".$this->_ville."."."<br><br>";

    }  

    public function getNom(){

        return $this -> _nom;

    }

    public function setNom(){

        return $this -> _nom;

    }

    public function getPrenom(){

        return $this -> _prenom;

    }

    public function setPrenom(){
        
        return $this -> _prenom;

    }

    public function getDateNaissance(){

        return $this -> _dateNaissance;

    }

    public function setDateNaissance(){

       return $this -> _dateNaissance;

    }

    public function getVille(){
        
        return $this -> _ville;

    }

    public function setVille(){

        return $this -> _ville;

    }

    public function ajouterCompte(Compte $compte){

        $this -> _comptes[] = $compte;

    }

    public function afficherComptes(){

        $resultat = "Informations de : $this";

        $resultat .= "<ul>";

        foreach ($this->_comptes as $compte) {

            $resultat .= "<li>$compte</li>";

        }

        $resultat .= "</ul>";

        return $resultat;

    } 
}

