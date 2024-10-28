<?php

$diameter = $_GET['diameter'];
$depth = $_GET['depth'];
$radius = $diameter / 2;
$volume = pi() * $radius ** 2 * $depth;
$gallons = $volume * 7.48052;
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        A Swimming Pool Calculator!
    </title>
</head>
<body>
    <h1>Swimming Pool Calculator</h1>
    <p>The volume of a swimming pool that is <?php echo $diameter; ?> in diameter and <?php echo $depth; ?> deep in <?php echo number_format($gallons, 1)?> gallons</p>
</body>
</html>
