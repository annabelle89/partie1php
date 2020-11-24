<!DOCTYPE html>

<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exercice2 php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
       
        <?php
        //Créer trois variables lastname, firstname et age et les initialiser avec les valeurs de votre choix.
        //Attention âge est de type entier. Afficher leur contenu.

        //Déclaration des variables.
        $lastname='Annabelle ';
        $firstname='Hoarau ';

        $age= (int) 12;//Entre guillemet on ne met que des chaînes de caractère.
        //Le 'int' permet de forcer le type, de dire que c'est un chiffre.Le mettre entre parenthèse.

        //On concatène nom prénom âge dans identité.
        $identity=$lastname.$firstname.$age;

        //On affiche Annabelle hoarau 31 ans.
        echo $identity;

        //string to upper case : strtoupper : majuscule
//string to lower case : strtolower : minuscule
//upper case First Character : La première lettre en majuscule
        ?>
        <ul>
            <li>Nom: <?php echo $lastname?></li>
            <li>Prénom:<?php echo $firstname?> </li>
            <li>Age: <?php echo $age?></li>
        </ul>
    <p>Je m'appelle Annabelle et j'ai 31 ans</p>
    <p>Je m'appelle <?php echo $lastname?> et j'ai <?php echo $age?> ans</p>
    <p>Je m'appelle Annabelle et j'ai 31 ans</p>

    <p><?php echo "Je m'appelle $firstname $lastname et j'ai $age ans";?></p>

     
   //Dans le cas ci dessous avec les apostrophes, les variables ne sont pas interprétées.
   //La version à utiliser.
   //On peut mixer les guillemets et les apostrophes.
    <p><?php echo "Je m'appelle ".strtoupper($firstname)." ". $lastname.' et j\'ai '.$age.' ans';?></p> 

   
    </body>
</html>