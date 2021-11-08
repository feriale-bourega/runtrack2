<?php

function calcule($nombre1,$opération, $nombre2)
{
  if ($opération === "/")
    return $nombre1/$nombre2;
  elseif ($opération === "+")
    return $nombre1 + $nombre2;
  elseif ($opération === "-")
    return $nombre1 - $nombre2;
  elseif ($opération === "*")
    return $nombre1*$nombre2;
  elseif ($opération === "%")
    return $nombre1 % $nombre2;
}

 echo calcule(12,"%",4);


?>
 