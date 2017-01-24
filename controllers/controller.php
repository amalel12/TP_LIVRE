<?php

require "./models/livre.php";

class controller
{
    public function AfficherLivre() {
        $livre = new livre();
        require_once "./views/client/accueil.php";
    }

    public function rajouterLivre($nom_livre) {
        return $livre->rajouterLivre($nom_livre);
        require_once "./views/client/accueil.php";
    }


    public function modifierLivre($id_livre, $nom_livre) {
        $livre = new livre();
        $livre->setIdLivre($id_livre);
        $livre->setNomLivre($nom_livre);
        return $livre->modifierLivre($livre);
    }

    public function supprimerLivre($id_livre){
        $livre = new livre();
        return $livre->supprimerLivre($id_livre);
    }

    public function Nbrlivre($id_livre){
      $livre = new livre();
      return $livre->Nbrlivre($id_livre);
    }

    public function findbyId($id_livre){
      $livre = new livre();
      return $livre->findbyId($id_livre);
    }
}
