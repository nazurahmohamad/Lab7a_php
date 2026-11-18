<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>

    <?php

    function calculateArea($width, $height)
    {
        $area = $width * $height;

        return $area;
    }

    $result = calculateArea(4, 2);

    echo "The area of a rectangle with a width of 4 and 2 is $result";

    ?>

</body>
</html>
