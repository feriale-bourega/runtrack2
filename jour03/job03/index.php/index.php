<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$nombre = 0;
$voyelles = array ('a','e','i','o','u','y','I');

while (isset($str[$nombre])){
    foreach($voyelles as $value) {
        if ($str[$nombre]==$value) {
        echo $str[$nombre];
     }
    }
    
   $nombre++;
}
?>