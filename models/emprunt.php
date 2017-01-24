<?php
include 'config.php';

Class Emprunt extends Livre{
  private $id_livre;
  private $identifiant;
  private $date_emprunt;
  private $date_retour;
  const duree_emprunt = 30;

  //Setters
  public function setIdLivre($id){
    $id_livre->$id;}
  public function setIdentifiant($iden){
    $identifiant->$iden;}
  public function setDateEmprunt($de){
    $date_emprunt->$de;}
  public function setDateRetour($dr){
    $date_retour->$dr;}

  //Getters
  public function getIdLivre(){
    return $identifiant;}
  public function getIdLivre(){
    return $id_livre;}
  public function getDateEmprunt(){
    return $date_emprunt;}
  public function getDateRetour(){
    return $date_retour;}

  //Compter le nombre de livres empruntés
  public function NbrlivreEmpruntes(Livre $livre){
    $connexion= mysql_connect(HOST, USER, PASS, DB);
    if(!$connexion){
      die('Connexion impossible :' .mysql_error());
    }
    echo'Correctement connecté';
    $result =mysql_query("SELECT count(*) id_livre FROM emprunt ORDERBY id_livre");
    echo ('Le nombre de livresEmpruntés est ',$result);
    mysql_close($connexion);
  }

  //Afficher les livres empruntés
  public function AfficherLivreEmpruntes(){
    $connexion= mysql_connect(HOST, USER, PASS, DB);
    if(!$connexion){
      die('Connexion impossible :' .mysql_error());
    }
    echo'Correctement connecté';
    for ($i=0; $i <$nbr_livre ; $i++) {
      $result =mysql_query("SELECT nom_livre FROM emprunt");
    }
    echo ('Le nom du livre est :'+$result);
    mysql_close($connexion);
  }

  //Verifier date retour
  public function VerifDate($date_emprunt,$date_retour){
    if ($date_retour = $date_emprunt + duree_emprunt) {
      echo "La personne a bien respecté la durée de l'emprunt";
    }
    else {
      echo "La personne n'a pas respecté la durée de l'emprunt";
    }
  }
}
?>
