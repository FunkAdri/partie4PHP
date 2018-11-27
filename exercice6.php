<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // La fonction
            function sentence($fName, $lName, $age) {
                // On concat ce qu'on veut afficher
                return 'Bonjour ' . $fName . $lName . ', tu as ' . $age . ' ans';
            }

            // On affiche
            echo sentence('Jeoui ', 'Leoui ', 70);
            ?>
        </div>
    </body>
</html>
