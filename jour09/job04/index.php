<?php
 $connect = mysqli_connect('localhost','root','','jour08');
 $query = mysqli_query($connect,"SELECT * FROM etudiants WHERE prenom LIKE 'T%'");
 $result = mysqli_fetch_all($query);

 var_dump($result);
 ?>
 <!DOCTYPE html>
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