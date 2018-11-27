<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // On fait la fonction de comparaison
            function comparing($fNumb, $sNumb) {
                // On donne les conditions d'affichage
                if ($fNumb > $sNumb) {
                    $result = 'Le premier nombre est plus grand';
                } elseif ($fNumb < $sNumb) {
                    $result = 'Le premier nombre est plus petit';
                } else {
                    $result = 'Les deux nombres sont identiques';
                }
                // Il affiche le résultat correspondant aux conditions
                return $result;
            }

            // On affiche la fonction de comparaison
            echo comparing(7, 2);
            ?>
        </div>
    </body>
</html>
