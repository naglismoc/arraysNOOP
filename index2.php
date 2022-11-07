<?php include "./pages/header.php"; ?>


    <h1>=)</h1>
    <?php
    if(isset($_GET['vardas']) && isset($_GET['vardas'])){
        echo '<h1>' .$_GET['vardas'] . " " . $_GET['pavarde'] .'</h1>';
    }
    ?>
    <form action="./index2.php" method="post">
        <input type="text" name="vardas">
        <input type="text" name="pavarde">
        <button type="submit">Touch me!</button>
    </form>

    <a href="./pages/anotherPage.php">anotherPage</a>
</body>
</html>