<?php
// echo $_SERVER['REQUEST_METHOD'];
// print_r(array_keys($_SERVER));

// session_start();
// // session_destroy();

// if(!isset($_SESSION['counter'])){
//     $_SESSION['counter'] = 0;
// }

// $_SESSION['counter']++;


// print_r($_SESSION);


// $counter = 0;
// if(isset($_POST['counter'])){
//   echo $_POST['counter'];
//     $counter =$_POST['counter'];
//     $counter++;
// }
print_r($_POST);
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
    <form action="" method="post">
     <input type="text" name="vardas">
    <!-- <input type="hidden" name="counter" value="<?=$counter?>"> -->
    <input type="checkbox" name="feeding[]" value="breakfast">
    <input type="checkbox" name="feeding[]" value="dinner">
    <input type="checkbox" name="feeding[]" value="supper">
    <button type="submit">mygtukas</button>
    </form>
</body>
</html>