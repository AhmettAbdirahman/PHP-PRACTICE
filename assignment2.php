<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//  Question 2

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "All elements: ";

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

echo "<br>";

$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total = $total + $numbers[$i];
}

echo "Total of all elements: " . $total;
echo "<br>";

$evenTotal = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $evenTotal = $evenTotal + $numbers[$i];
    }
}

echo "Total of even elements: " . $evenTotal;
echo "<br>";

$oddTotal = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 != 0) {
        $oddTotal = $oddTotal + $numbers[$i];
    }
}

echo "Total of odd elements: " . $oddTotal;
echo "<br>";

$min = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
    }
}

echo "Minimum element: " . $min;
echo "<br>";
echo "Minimum positions: ";

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $min) {
        echo $i . " ";
    }
}

echo "<br>";

$max = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo "Maximum element: " . $max;
echo "<br>";
echo "Maximum positions: ";

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $max) {
        echo $i . " ";
    }
}

echo "<br><br>";



// Assignment 2 - Question 2

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),
    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $values) {
    echo "<tr>";
    echo "<td>" . $row . "</td>";

    foreach ($values as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<br><br>";


// Assignment 2 - Question 3

$students = array(
    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA221" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $row => $values) {
    echo "<tr>";
    echo "<td>" . $row . "</td>";

    foreach ($values as $value) {
        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<br><br>";




























?>
</body>
</html>