<?php

    class Magasins {

        private $_nomMag;
        private $_adresse;
        private $_codePostal;
        private $_ville;
        private $_restauration;

        // Mutateurs
        public function setNomMag($sNomMag)
        {
        return $this->_nomMag = $sNomMag;
        }

        public function setAdresse($sAdresse)
        {
        return $this->_adresse = $sAdresse;
        }

        public function setCodePostal($sCodePostal)
        {
        return $this->_codePostal = $sCodePostal;
        }

        public function setVille($sVille)
        {
        return $this->_ville = $sVille;
        }

        public function setRestauration($sRestauration)
        {
        return $this->_restauration = $sRestauration;
        }

        // Accesseurs
        public function getNomMag()
        {
            return $this->_nomMag;
        }

        public function getAdresse()
        {
            return $this->_adresse;
        }

        public function getCodePostal()
        {
            return $this->_codePostal;
        }

        public function getVille()
        {
            return $this->_ville;
        }

        public function getRestauration()
        {
            return $this->_restauration;
        }

    }