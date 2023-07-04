<?php
    include_once __DIR__ . '/functions.php';
    if(empty($_GET['lenght'])){

    } else { 
        $lenght = $_GET['lenght'];
        $password = generateRandomPassword($_GET['lenght']);   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="GET">
    <h1>
        Insert the desired number of caracter of the password that you want generate
    </h1>
    <br>
    <input type="number" name="lenght" id="lenght">
    <input type="submit" value="check">
    </form>  
   <h2>
       <?php 
           if (!empty($_GET['lenght'])){
           echo " Your generated password is : $password " ;
           } else{ 
           echo " select a lenght for you password! " ;
           }
       ?>
       
   </h2>
    
</body>
</html>