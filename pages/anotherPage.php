<?php 
// print_r(array_keys($_SERVER));
echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo " sveiki atvyke i puslapi!";
}else{
    echo "Aciu, kad supildete duomenis!";
    header("Location: ./anotherPage.php");
    die;
}

include "./header.php"; ?>

    <h1>cia atvaizduojami formos duomenys</h1>
    <?php
    if(isset($_GET['vardas']) && isset($_GET['pavarde'])){
        echo '<h1>' .$_GET['vardas'] . " " . $_GET['pavarde'] .'</h1>';
    }
    ?>
      <form action="" method="post">
        <input type="text" name="vardas">
        <input type="text" name="pavarde">
        <button type="submit">Touch me!</button>
    </form>

    <a href="./anotherPage.php?bird=varna">another bird(page)</a>
</body>
</html>