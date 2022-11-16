<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$nombre = 0;
while (isset($str[$nombre])){
    echo $str[$nombre];

    $nombre += 2;
}


?>