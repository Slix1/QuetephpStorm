<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

print_r($students);

$moyenne=0;

foreach ($students as $age) {
    $moyenne += $age;
}

        $moyenne /= count($students);

echo "la moyenne est ".$moyenne."\n";