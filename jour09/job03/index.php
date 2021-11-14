<?php
 $connect = mysqli_connect('localhost','root','','jour08');
 $query = mysqli_query($connect,"SELECT prenom,nom,naissance FROM etudiants WHERE sexe = 'Femme'");
 $result = mysqli_fetch_all($query);

 var_dump($result);
 ?>
 <!DOCTYPE html>
  <html>
  
    <head>
         <title>Les salles</title>
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
              <?php
                 foreach ($result as $key){
                     echo"<tr>";
                  foreach ($key as $value){
                      echo"<td>$value</td>";
                  }
                     echo"</tr>";
                 } 
                 ?>
            </tbody>
        </table>
    </body>
    </html>