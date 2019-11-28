<?php

$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Jouw username is <?php echo $username ?></h1>
     <h1>Jouw email is <?php echo $email ?></h1>
     <h1>Jouw leeftijd is <?php echo $age ?></h1>
   </body>
 </html>
