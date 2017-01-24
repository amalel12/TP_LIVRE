<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestionnaires des emprunts de livre</title>
  </head>
  <body>
    <h1>Gestionnaires des emprunts de livre</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($livre as $l) {
                    echo "<tr>
                            <td><input class='livre' type='text' value='".$l->getNomLivre()."'</td>
                            <td><a class='update' href='#update".$l->getIdLivre()."'><button class='btn btn-warning'>Update</button></a></td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($livre as $li) {
                    echo "<tr>
                            <td><a style='color:black;' href='?action=ModifierLivre=".$livre->getIdLivre()."'>".$livre->getNomLivre()."</a></td>
                            <td>
                                <a href='?action=ModifierLivre=".$livre->getIdLivre()."'><img width='32' src='./views/img/update.png'></a>
                                <a class='supprimerLivre' href='#supprimerLivre".$livre->getIdLivre()."'><img width='32' src='./views/img/delete.png'></a>
                            </td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>

    <a href="?action=rajouter"><button class="btn btn-primary">Rajouter un nouveau livre</button></a>
    <h2>Rajouter un nouveau livre :</h2>

    <label for="nouveau Livre">Le nom du nouveau livre est : </label>
    <input type="text" name="nom_livre">
  </body>
</html>
