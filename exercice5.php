<!DOCTYPE html>

<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exo5 php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        
          <?php
        //Créer une variable answer. L'initialiser avec yes ou no. Si la réponse est yes afficher le message Vous avez répondu "oui"'. Sinon afficher Vous avez répondu "non".

        $answer=$_GET['anna'];
        
        if($answer=='yes'){
        echo 'Vous avez répondu oui !';
    }
        else if($answer=='no'){
        echo 'Vous avez répondu non !';
        }
        else{
            echo 'Vous avez répondu autre chose !';
        }
        //print_r($_GET);
        ?>
    
    </body>
</html>