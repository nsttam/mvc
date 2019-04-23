<?php
    class DbManager{

        protected $bdd;

        public function __construct()
        {
            try
            {
                $this->bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>