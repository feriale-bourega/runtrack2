<?php

$connect = mysqli_connect("localhost", "root", "", "jour08"); 
$query = mysqli_query($connect, "SELECT * FROM etudiants ") ;
$result= mysqli_fetch_all($query);
var_dump($result);
?>


<!DOCTYPE HTML>
    <html>
       <head>
          <title>Les etudiants</title>
          <meta charset="UTF-8">
          <link rel="stylesheet" type="text/css" href="">
       </head>

<body>
    
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>email</th>
       </tr>
      </thead>
    <tbody>
            <?php foreach ($result as $key ) { // creation d'une boucle foreach qui va inspecter tous les $key qui se trouvent dans $result
                echo "<tr>"; // à chaque fois que la boucle va tomber sur un $key il va afficher une ligne
                foreach ($key as $value) { // creation d'une boucle qui va inspecter les éléments $value dans $key
                   echo "<td>$value</td>"; // à chaque fois que la boucle va tomber sur $value il va l'afficher dans un <td>
                }
                echo "</tr>"; // on ferme le tableau
            } ?>      
           
    </tbody>
    </table>
    
</body>
</html>
