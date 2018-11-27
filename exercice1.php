<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // On crée la fonction ...
            function trueFunction() {
                // ... Qui retourne en True
                return true;
            }

            // On l'affiche
            echo trueFunction();
            var_dump(trueFunction());
            ?>
        </div>
    </body>
</html>