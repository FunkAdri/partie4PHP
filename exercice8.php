<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // La fonction
            function sum($numb1 = 1, $numb2 = 2, $numb3 = 3) {
                // On additionne
                return $numb1 + $numb2 + $numb3;
            }

            // On affiche la fonction
            echo sum();
            ?>
        </div>
    </body>
</html>
