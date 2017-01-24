$(document).ready(function () {

    $('.supprimerLivre').on('click', function () {
            $.get({
                url:"./index.php?action=supprimerLivre="+id_livre
            });
            window.location = "./index.php";
        }
    });

    $('.modifierLivre').on('click', function () {
            $.get({
                url:"./index.php?action=modifierLivre="+nom_livre+"&id_livre="+id_livre
            });
            window.location = "./index.php";
        }
    });

    $('.rajouterLivre').on('click', function () {
            $.get({
                url:"./index.php?action=rajouterLivre="+nom_livre
            });
            window.location = "./index.php";
        }
    });
});
