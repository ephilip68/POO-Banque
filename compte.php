<?php

class Compte {

    private string $_libelle;
    private float $_soldeInitial;
    private string $_devise;
    private string $_client;
    private float $_solde;


    public function __construct(string $libelle, float $soldeInitial, string $devise, Client $client){

        $this -> _libelle = $libelle;
        $this -> _soldeInitial = $soldeInitial;
        $this -> _devise = $devise;
        $this -> _client = $client;
        $client -> ajouterCompte($this);

        $this-> _solde = $soldeInitial;

    }

    public function __toString(){

        return $this->_libelle." : (".$this->_solde." ".$this->_devise.") Client : ".$this->_client;

    }

    public function getLibelle(){

        return $this -> _libelle;

    }

    public function setLibelle(){

        return $this -> _libelle;

    }

    public function getSoldeInitial(){

        return $this -> _soldeInitial;

    }

    public function setSoldeInitial(){

        return $this -> _soldeInitial;

    }

    public function getDevise(){
        
        return $this -> _devise;

    }

    public function setDevise(){

        return $this -> _devise;

    }

    public function getClient(){

        return $this -> _client;

    }

    public function setClient(){

        return $this -> _client;

    }

    public function getSolde(){

        return $this->_solde;

    }

    public function setSolde(){

        return $this->_solde;

    }

    public function crediterCompte($montant){

        $this->_solde += $montant;

        return $this;

    }

    public function debiterCompte($montant) {

        $this->_solde -= $montant;

        return $this;

    }

    public function virement(Compte $compteClient, float $montant){

        $this->debiterCompte($montant);

        $compteClient->crediterCompte($montant);

        echo "Virement de $montant € a été effectué.<br>Solde de $this->_libelle : $this->_solde € <br><br>";

    }
}


