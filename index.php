<?php
include "./Tree.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>arrays</h1>

    <?php

// $cars = array("Volvo", "BMW", "Toyota");
// array_push($cars,"blue");

$cars = ["v","b","t"];

$cars[] = "a";
print_r($cars);
echo "<br>";


$cars[60] = "h";
print_r($cars);
echo "<br>";

$cars[] = "j";
print_r($cars);
echo "<br>";



$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
print_r($age);
echo "<br>";

echo $age['Joe'];
echo "<br>";

$age[] = "46";
print_r($age);
echo "<br>";

$age["Jonas"] = "36";
print_r($age);
echo "<br>";

print_r( array_values($age) );
echo "<br>";

print_r( array_keys($age) );
echo "<br>";


$tree = new Tree();
print_r($tree);
echo "<br>";

// $tree->name = "Graikinis riesutmedis";
$tree->setName("Graikinis riesutmedis");
$tree->evergreen = false;
$tree->height = 12;
$tree->edible = true;
print_r($tree);
echo "<br>";
// var_dump($tree);
 

echo $tree->getName();
echo "<br>";

// $tree->color = "green";
print_r($tree);
echo "<br>";

$tree2 = new Tree("Klevas", false, 18, false);
print_r($tree2);
echo "<br>";

$tree3 = new Tree("azuoliukas", false);
print_r($tree3);
echo "<br>";

$tree3->setName("Azuolas");
print_r($tree3);
echo "<br>";

Tree::classDescription();
echo "<br>";
echo "<br>";
echo "<br>";

$trees = [$tree,$tree2,$tree3];

// for ($i=0; $i < count($trees); $i++) { 
//     $medis = $trees[$i];
//     echo $medis->getName()."<br>";
// }

foreach ($trees as $medis) {
   foreach ($medis as $propercioPavadinimas => $medzioPropertis) {
        echo $propercioPavadinimas."=>".$medzioPropertis . ", ";
   }
   echo "<br>";
}



?>

<table class="table">
    <thead>
        <tr>
            <?php
                foreach ($trees[0] as $key => $value) {
                    echo "<th>".$key."</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($trees as $tree) {
                echo "<tr>";
                    echo "<td>".$tree->name."</td>";
                    echo "<td>". ( ($tree->evergreen) ? "visžalis" : "meta lapus" )."</td>";
                    echo "<td>".$tree->height."</td>";
                    echo "<td>". ( ($tree->edible) ? "valgomas" : "nevalgomas" )."</td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>

</body>
</html>