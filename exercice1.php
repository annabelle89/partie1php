//Ce qui apparaît ici, ne s'affiche pas dans la page web.(les variables doivent toujours être affichées avant les echo)
<?php
$objet='Bière';
?>
<!DOCTYPE html>

<html lang="fr" lang="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice1 php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
        <?php
        //Créer 2 variables object et message et les initialiser avec les valeurs de votre choix. Les afficher.

        //Déclaration variables.
        $objet='Bière ';
        $message='Venez boire!';
        $result=$objet.$message;
        //Affichage Venez boire bière.
        echo $result;
        
        ?>
        <h1><?php echo $objet ?></h1>
        <p><?php echo $message?></p>
        <?php echo '<h1>Bière</h1>'?>
    </body>
</html>