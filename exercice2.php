<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // On met en place la fonction
            function stringReturn($var) {
                return $var;
            }

            // On affiche la fonction et son "résultat"
            echo stringReturn('Je oui, le oui');
            ?>
        </div>
    </body>
</html>
