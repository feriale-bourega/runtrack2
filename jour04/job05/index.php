<?php 
        //GET n'est pas sécurisé
    if ($_POST["username"]=='John' && $_POST["password"]=='Rambo') {
        echo '“C’est pas ma guerre”';
    }

    else {
        echo '“Votre pire cauchemar”'; 
    }

    var_dump ($_POST);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Formulaire." />
        <title>FORMULAIRE</title>
    </head>
    <body>
        <main> 
            <form action="" method="post">
                <legend>FORMULAIRE</legend>

                    <input type="text" name="username" placeholder="Username">
            
                    <input type="text" name="password" placeholder="Password">
                    <button type="submit">Valider</button>
            </form>  
        </main>
    </body>
</html>
 