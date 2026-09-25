<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

$num1 = 25;
$num2 = 10;
$num3 = 18;

if ($num1 > $num2 && $num1 > $num3) {
    $greatest = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

if ($num1 < $num2 && $num1 < $num3) {
    $smallest = $num1;
} elseif ($num2 < $num1 && $num2 < $num3) {
    $smallest = $num2;
} else {
    $smallest = $num3;
}

echo "The greatest number is: " . $greatest . "<br>";
echo "The smallest number is: " . $smallest;
echo "<br><br>";

// Assignment 2

$number = 15; if ($number % 3 == 0 && $number % 5 == 0) { echo "The number is divisible by both 3 and 5."; } elseif ($number % 3 == 0) { echo "The number is divisible by 3."; } elseif ($number % 5 == 0) { echo "The number is divisible by 5."; } else { echo "The number is divisible by none of them."; }

echo "<br><br>";



// Assignment 3

for ($i = 2; $i <= 20; $i++) { if ($i % 2 != 0) { echo $i . " "; } } echo "<br>"; for ($i = 35; $i >= 7; $i--) { if ($i % 2 == 0) { echo $i . " "; } } 
echo "<br><br>";






// Assignment 4

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";




// Assignment 5



$number = 12345;
$reverse = 0;

for (; $number > 0; $number = (int)($number / 10)) {
    $digit = $number % 10;
    $reverse = ($reverse * 10) + $digit;
}

echo "The reverse is: " . $reverse;

echo "<br><br>";




// Assignment 6

$num1 = 8;
$num2 = 12;

for ($i = 1; ; $i++) {
    if (($num1 * $i) % $num2 == 0) {
        $lcm = $num1 * $i;
        break;
    }
}

echo "The LCM is: " . $lcm;

echo "<br><br>";



// Assignment 7

$num1 = 18;
$num2 = 24;
$hcf = 0;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "The HCF is: " . $hcf;

echo "<br><br>";




// Assignment 8



echo "<table border='1' cellpadding='8'>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<br><br>";




































?>








</body>
</html>