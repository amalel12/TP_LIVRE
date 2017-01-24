<?php

$controller new controller() ;
if(isset($_GET['action'])){
  if($_GET['action'] == "supprimerLivre") {
    $controller->supprimerLivre($_GET['id_livre']);
  }
  elseif ($_GET['action'] == "ModifierLivre") {
    $controller->ModifierLivre($_GET['nom_livre']);
  }
  elseif ($_GET['action'] == "rajouterLivre"){
    $controller->rajouterLivre($_GET['$id_livre'],$_GET['$nom_livre'],$_GET['$nbr_livre']);
  }
  elseif ($_GET['action'] == "findbyId"){
    $controller->findbyId($_GET['$id_livre']);
  }
  elseif ($_GET['action'] == "Nbrlivre"){
    $controller->Nbrlivre($_GET['$id_livre']);
  else {
      $controller->AfficherLivre();
  }
}
 ?>
