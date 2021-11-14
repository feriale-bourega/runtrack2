<?php 

foreach($_GET as $element) {
    if($element %2 == 0) {
         echo $element." est paire </br>";
    }
    else {
     echo $element." est impaire </br>";
    }

    var_dump ($_GET);
}
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
            <form action="" method="get">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <button type="submit">Valider</button>
            </form>  
        </main>
    </body>
</html>