<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP Partie 4</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php

            // On fait la fonction
            function concat($fVar, $sVar) {
                // On lui dit de concaténer
                return $fVar . $sVar;
            }

            // On affiche la fonction
            echo concat('Coucou', ' bandes de nouilles');
            ?>
        </div>
    </body>
</html>
