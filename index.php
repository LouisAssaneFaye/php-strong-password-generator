<?php

    $lenght = null;
    if(empty($_GET['lenght'])){
        echo 'select a lenght';
    } else { 
        $lenght = $_GET['lenght'];
        $password = generateRandomPassword($_GET['lenght']);   
    }

    function generateRandomPassword($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
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
           echo " Your generated password is : $password " ;
       ?>
   </h2>
    
</body>
</html>