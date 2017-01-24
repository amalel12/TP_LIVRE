<?php
  include 'config.php';

  Class livre {
    private $db;
    private $id_livre;
    private $nom_livre;
    private $nbr_livre;

    function __construct(){}

    fopen($db);
    //Setters
    public function setIdLivre($i){
      $id_livre->$i;}
    public function setNomLivre($n){
      $nom_livre->$n;}
    //Getters
    public function getIdLivre(){
      return $this->$id_livre;}
    public function getNomLivre(){
      return $this->$nom_livre;}

    //Afficher un livre
    public function AfficherLivre(){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      for ($i=0; $i <$nbr_livre ; $i++) {
        $result =mysql_query("SELECT nom_livre FROM livre");
      }
      echo ('Le nom du livre est :'+$result);
      mysql_close($connexion);
    }

    //Rajouter un livre
    public function rajouterLivre($nom_livre){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      $result =mysql_query("INSERT INTO livre VALUES ($id_livre,$nom_livre,$nbr_livre)");
      $nbr_livre++;
      mysql_close($connexion);
    }

    //Supprimer un livre
    public function supprimerLivre($id_livre){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      $result =mysql_query("DELETE FROM livre WHERE $this->$id_livre = $id_livre");
      $nbr_livre--;
      mysql_close($connexion);
    }

    //Modifier nom du livre
    public function modifierLivre($id_livre,$nom_livre){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      $result =mysql_query("UPDATE livre SET nom_livre WHERE $nom_livre=$this->$nom_livre");
      mysql_close($connexion);
    }

    //Recherche de livre par son id
    public function findbyId(){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      $result =mysql_query("SELECT nom_livre from livre WHERE $this->$id_livre==$id_livre");
      mysql_close($connexion);
    }
    //Compter le nombre de livres
    public function Nbrlivre($id_livre){
      $connexion= mysql_connect(HOST, USER, PASS, DB);
      if(!$connexion){
        die('Connexion impossible :' .mysql_error());
      }
      echo'Correctement connecté';
      $result =mysql_query("SELECT count(*) id_livre FROM livre ORDERBY id_livre");
      echo ('Le nombre de livresEmpruntés est ',$result);
      mysql_close($connexion);
    }
  }




  fclose($db);
 ?>
