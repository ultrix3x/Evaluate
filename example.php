<?php
include("evaluate.php");

$eval = new evaluate();
$output = $eval->mixeval("<B><?php include(\"obi.php\"); ?></B> <I><? echo \"Hello\";?></I> <U>there</U>");
// Handle output here
echo $output;

$output = $eval->mixevalfile("obi.php");
// Handle output here
echo $output;
?>