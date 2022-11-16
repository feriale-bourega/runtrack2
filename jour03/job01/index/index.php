<?php
//construction du tableau de nombres
$nombres=array('200','204','173', '98', '171', '404', '459');
 

 

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
// parcours du tableau
foreach($nombres as $nombre){
    echo $nombre.'- '.parite($nombre).'<br/>';
}

?>