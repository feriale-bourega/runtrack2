
<?php
    session_start();
    if (isset($_GET['reset'])){ 
       echo 'ok';
       session_destroy();
       header('Location: index.php');
       
    }
    if ( isset($_SESSION['nbvisites']))
    {
         $_SESSION['nbvisites']++;
    }
      else {
        $_SESSION['nbvisites']= 0;
    }
     echo $_SESSION['nbvisites'];


    ?>
    <!DOCTYPE HTML>
    <html>
       <head>
          <title>Sessions et cookies</title>
          <meta charset="UTF-8">
          
          
       </head>
       <body>
    
    <form action="#" method="get">

    <input type="submit" name="reset" value="Reset">
</form>
  </body>
  </html>