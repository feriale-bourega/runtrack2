<?php
    // if (isset($_COOKIE['mycookie'])) {
    //     // si le cookie existe
    //    }
    if (!isset($_COOKIE['prenom'])) {
        setcookie('cookie', $_GET['prenom']);
        echo '<form action="#" method="get">
                <input type="text" name="prenom" placeholder="prenom">
                <button type="submit" name="connexion">Connexion</button>
            </form>';

    }

    if (isset($_COOKIE['cookie'])) {
        echo 'Bonjour '.$_COOKIE['cookie'];
        echo '<form action="#" method="get">
                <button type="submit" name="deco">Déconnexion</button>
            </form>';

    }
    if (isset($_GET['deco'])) {
        echo '<form action="#" method="get">
                <input type="text" name="prenom" placeholder="prenom">
                <button type="submit" name="connexion">Connexion</button>
            </form>';

    }

  

          
            

               
           
    var_dump($_GET);
?>

<!-- <!DOCTYPE html>
<html lang="fr">
    <form action="#" method="get">
        <input type="text" name="prenom" placeholder="prenom">
        <button type="submit" name="connexion">Connexion</button>
        <button type="submit" name="deconnexion">Déconnexion</button>
    </form>
</html>  -->

