<?php
include 'config.php';

Class Personne {
  private $nom;
  private $prenom;
  private $identifiant;
  private $livre_empruntés;

  public function setNom($n){
    $nom->$n;}
  public function setPrenom($p){
    $prenom->$p;}
  public function setIdentifiant($id){
    $identifiant->$id;}
  public function setLivreEmpruntes($le){
    $livre_empruntés->$le;}

  public function getNom(){
    return $this->$nom;}
  public function getPrenom(){
    return $this->$prenom;}
  public function getIdentifiant(){
    return $this->$identifiant;}
  public function getLivreEmpruntes(){
    return $this->$livre_empruntés;}

  public function ListeLivreEmpruntes(){
    $connexion= mysql_connect(HOST, USER, PASS, DB);
    if(!$connexion){
      die('Connexion impossible :' .mysql_error());
    }
    echo'Correctement connecté';
    $result =mysql_query("SELECT count(*) livre_empruntés FROM personne ORDERBY livre_empruntés");
    echo ('Le nombre de livresEmpruntés est ',$result);
    mysql_close($connexion);
  }

}
?>
