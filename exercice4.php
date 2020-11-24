<!DOCTYPE html>

<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice4 php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        //Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher : Bonjour + name + , comment vas-tu ?.
        //Création variable.
        $name='Annabelle';
        //Affichage.
        echo 'Bonjour '.$name.'  comment vas-tu ? ';
        ?>
        
        //Une bonne façon de le faire !
        <p> Bonjour, <?php echo $name;?> comment tu vas ? </p>
        
        
    </body>
</html>