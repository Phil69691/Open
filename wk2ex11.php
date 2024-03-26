<?php

$mymarks = array(
    "CS101" => 85,
    "CS102" => 75,
    "CS103" => 90,
    "CS104" => 80,
    "CS105" => 95,
    "CS106" => 70
);

foreach ($mymarks as $module => $mark) {
    echo "Module $module: $mark <br/>";
}


$totalMarks = array_sum($mymarks);
$numberOfModules = count($mymarks);
$averageMark = $totalMarks / $numberOfModules;

echo "Average Mark: $averageMark";
?>
