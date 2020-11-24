<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo3 php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    

       <?php
        //Créer une variable km.
        //L'initialiser à 1. Afficher son contenu.
        //Changer sa valeur par 3. Afficher son contenu.
        //Changer sa valeur par 125. Afficher son contenu.

        //Déclaration variable.
        $kilometre= (int) 1;
        //On affiche 1 et on le concatène.
        echo '<p>'.$kilometre.'</p>';//Balises <p> pour que cela aille à la ligne.

        //Change la valeur par 3.
        $kilometre= (int) 3;
        echo '<p>'.$kilometre.'</p>';

        //change sa valeur par 125.
        $kilometre= (int) 125;
        echo '<p>'.$kilometre.'</p>';
        ?>
    </body>
</html>