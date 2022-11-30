<?php
/* Connexion à la base de données */

$servername = 'localhost';
$username = 'root';
$password = '';
$base = 'jour09';
$conn = mysqli_connect($servername, $username, $password, $base);

/* Requête sql qui récupère l'ensemble des informations de la table 'etudiants'*/
$query = mysqli_query($conn, "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1999-12-31' AND '2016-09-08'") ;
/*On récupère l'ensemble des informations de la table 'etudiants'*/
$result= mysqli_fetch_all($query);
var_dump($result);

?>
<!DOCTYPE HTML>
    <html>
       <head>
          <title>Etudiants</title>
          <meta charset="UTF-8">
          <link rel="stylesheet" type="text/css" href="">
       </head>

<body>
    
  <table>
    <thead>
      <tr>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
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