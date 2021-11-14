<?php
            
                foreach ($_GET as $key => $value) {
                    echo'<table>
                    <thead>
                    <tr>
                       <th>Arguments</th>
                       <th>Valeurs</t>
                    </td>
                    </thead>
                    <tbody>
                       <td>'.$key.'</td>
                       <td>'.$value.'</td>

                    </tbody>
                    </table>';

                }
                
            
 ?>
        <!DOCTYPE HTML>
    <html>
       <head>
          <title>FORMULAIRE</title>
          <meta charset="UTF-8">
          
          
       </head>
       <body>
           <body style="background-color: orange;">
           <h1>FORMULAIRE DE L'AGENDA</h1>
    <form action="#" method="get">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title"> <br>
        <label for="choose">Catégorie</label><br>
        <input type="text" id="choose" name="choose"><br>
        <label for="day">Date</label><br>
        <input type="text" id="day" name="day"><br>
        <textarea name="message" rows="10" cols="30">Description:</textarea><br>
        <label for="send" >Envoyer</label><br>
        <input type="submit" id="send" name="send"><br>
    </form>
    </body>
    </html>
