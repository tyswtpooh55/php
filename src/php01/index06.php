<?php
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}

function getSquareArea($base, $height)
{
    return $base * $height;
}

function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getTriangleArea(7, 8) . "<br />\n";
echo getSquareArea(5, 5) . "<br />\n";
echo getTrapezoidArea(4, 5, 5);