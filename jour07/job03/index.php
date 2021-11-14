²<?php
    session_start();//COMMENCER MA SESSION
    if(isset($_GET['reset'])) { //Si mon bouton RESET est TRUE
        unset($_SESSION['surname']);//Je DETRUIT ma session
    }

    if(!isset($_SESSION['surname'])) { //Si ma session n'existe pas
        $_SESSION['surname']=''; // Je la créer
    }

    if(isset($_GET['prenom'])) { //Si ma prenom existe
        $_SESSION['surname'].=$_GET['prenom'].'<br>'; // Je dis que ma session est égale à mon GET PRENOM  
    }
    echo $_SESSION['surname']; // et je l'affiche
?>

<!DOCTYPE html>
<html lang="fr">
    <form action="#" method="get">

    <input type="text" name="prenom" placeholder="prenom">
        <button type="submit" name="valider">Valider</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</html> 

