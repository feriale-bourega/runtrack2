<?php
//construction du tableau de nombres
$nombre=array('200','204','173', '98', '171', '404', '459');
 
//parcours du tableau
 

/*
Pour chaque valeur du tableau $nombre, compose la variable $verdict et affiche le verdict puis va à la ligne...
*/
 function parite($nombre){
    //si le reste de la division est zéro, c'est pair
    if (($nombre%2)==0){
        //on initialise les deux valeurs de verdict
        $verdict='pair';
    }
    else{
        $verdict='impair';
    }
    //on renvoie le verdict, tout à la fin
    return $verdict;
}

foreach($nombre as $verdict){
    echo'- '.parite($nombre).'<br/>';
}

?>