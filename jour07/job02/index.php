<?php
 /* $i=0;
    setcookie('nbvisites',$i);
  
    
       if (isset($_COOKIE['nbvisites'])) {
           $_COOKIE['nbvisites']++;
       }
       echo $_COOKIE['nbvisites'];*/
       if(isset($_GET['reset'])) {
        unset($_COOKIE['nbvisites']);
        header('location: index.php');
    }
       if(!isset($_COOKIE['nbvisites'])){
          
            setcookie('nbvisites',0);
       }
       else {
        $i=$_COOKIE['nbvisites']+1;
        setcookie('nbvisites',$i);

       }

       echo $_COOKIE['nbvisites'];

?>

<!DOCTYPE html>
<html lang="fr">
    <form action="#" method="get">
        <button type="submit" name="reset">Reset</button>
    </form>
</html> 

