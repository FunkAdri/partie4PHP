<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // La fonction
            function ident($genre, $age) {
                if (($age < 18) AND ( $genre == 'Femme')) {
                    $result = 'Vous êtes une Femme mineure';
                } elseif (($age < 18) AND ( $genre == 'Homme')) {
                    $result = 'Vous êtes un Homme mineur';
                } elseif (($age >= 18) AND ( $genre == 'Femme')) {
                    $result = 'Vous êtes une Femme majeure';
                } else {
                    $result = 'Vous êtes un Homme majeur';
                }
                return $result;
            }

            echo ident('Femme', 29);
            ?>
        </div>
    </body>
</html>
