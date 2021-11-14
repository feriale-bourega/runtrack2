<?php 

/*foreach ($_GET as $key => $value) {
    for($i=0; $i <= $_GET["largeur"]; $i++) {
        echo "_ ";

    }
    for($i=0; $i <= $_GET["hauteur"]; $i++) {
        echo "|<br>";

    }
} */


for ($i = 0; $i < $_GET["hauteur"]; $i++) { // Récupérer avec $_GET pour le toit
    for($toit=$_GET["hauteur"];$toit>=$i;$toit--) {
        if($toit!=$_GET["hauteur"]-1) {
            echo "&nbsp&nbsp";

        }
     
        }
    echo "/"; 
   
    for($toit=1;$toit<=$i;$toit++) {
        echo "__";
     
        }
     
    echo "\ "; 
    echo "<br>";
 
}

for($i = 1; $i < $_GET["largeur"]; $i++) { // Récupérer avec $_GET la largeur et l'incrémenter 
       
  

}
for ($i = 0; $i < $_GET["hauteur"]; $i++) { // Récupérer avec $_GET la hauteur et l'incrémenter

    for($j = 0; $j < $_GET["largeur"]; $j++) {
        if($j==0) {
            echo '&nbsp&nbsp|';


        }
        elseif ($j==$_GET["largeur"]-1) {
            
            if($i!=$_GET["hauteur"]) {
                
                   
                echo '|<br>';
            }
           
       
            
        }
        else {
            if ($i==$_GET["hauteur"]-1) {
                echo '_';
            }
            else {
                echo "&nbsp&nbsp";

            }


        }
    }
   
}



?>

<!DOCTYPE html>
<html lang="fr">
    <form action="" method="get">
        <br>
        <input type="text" name="largeur" placeholder="Largeur">

        <input type="text" name="hauteur" placeholder="Hauteur">

        <button type="submit">Valider</button>
    </form>
</html>

