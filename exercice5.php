<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // La fonction
            function concat($nameVar, $ageVar) {
                // On concat
                return $nameVar . $ageVar;
            }

            // On affiche
            echo concat('Bo-bobo Bo-bobobo ', 28);
            ?>
        </div>
    </body>
</html>