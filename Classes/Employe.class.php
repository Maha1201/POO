<?php

    class Employe  {

        private $_nom;
        private $_prenom;
        private $_dateEmbauche;
        private $_poste;
        private $_salaire;
        private $_service;
        private $_magasin;

        // Mutateurs
        public function setNom($sNom)
        {
            $this->_nom = $sNom;
            return $this;
        }

        public function setPrenom($sPrenom)
        {
            $this->_prenom = $sPrenom;
            return $this;
        }

        public function setDateEmbauche($sDateEmbauche)
        {
            $this->_dateEmbauche = $sDateEmbauche;
            return $this;
        }

        public function setPoste($sPoste)
        {
            $this->_poste = $sPoste;
            return $this;
        }

        public function setSalaire($sSalaire)
        {
            $this->_salaire = $sSalaire;
            return $this;

        }

        public function setService($sService)
        {
            $this->_service = $sService;
            return $this;
        }

        public function setMagasin($magasin)
        {
            $this->_magasin = $magasin;
            return $this;
        }

        // Accesseurs
        public function getNom()
        {
            return $this->_nom;
        }

        public function getPrenom()
        {
            return $this->_prenom;
        }

        public function getDateEmbauche()
        {
            return $this->_dateEmbauche;
        }

        public function getPoste()
        {
            return $this->_poste;
        }

        public function getSalaire()
        {
            return $this->_salaire;
        }

        public function getService()
        {
            return $this->_service;
        }

        public function getMagasin() {
            return $this->_magasin;
        }

        // Affichage
        public function Display(){

            echo $this->getNom()."<br>";
            echo $this->getPrenom()."<br>";
            echo $this->getDateEmbauche()."<br>";
            echo $this->getPoste()."<br>";
            echo $this->getSalaire()."<br>";
            echo $this->getService()."<br>";
            echo $this->getMagasin()->getRestauration();
        }

        // 2 - Dans la classe Employe, écrire une méthode permettant de savoir depuis combien d'années l'employé est dans l'entreprise.
        public function Anciennete()
        {
            $Date = date('d-m-y h:i:s');

            $start_datetime = new DateTime($Date); 
            $diff = $start_datetime->diff(new DateTime($this->getDateEmbauche())); 
    
            echo $diff->days.' Jours<br>';
            //echo $diff->y.' Années<br>';
        }

}