<?php
function getRectangleSurface($width, $height) {
    $surface = $width * $height;
    return $surface;
}

$first = getRectangleSurface(10, 15);
$second = getRectangleSurface(7,  12);
$third = getRectangleSurface(15,  22);
$rectanglesSurface = $first + $second + $third;
echo PHP_EOL." The Result is: ".$rectanglesSurface.PHP_EOL; 