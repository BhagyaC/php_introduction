<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
// php datatypes

//Integer = Numeric values
//Floating point or Float = Decimal
//String
//Booleans
//Array
//Object
//Resource
//Null

$age = 24;
echo "My age is: ". $age;

echo "<br>";

$price = 10.5;
echo "The price is: ". $price;

echo "<br>";

$name = "Dary";
echo "My name is " . $name;

echo "<br>";

$is_allowed = true;
echo $is_allowed;

echo "<br>";
$x = "Hello world";
$x = null;
echo $x;
$y;

// arrays

$cars1 = "BMW";
$cars2 = "Audi";
$cars3 = "Mercedes";

$cars = array("BMW", "Audi", "Mercedes");
echo $cars[2];

echo "<br>";

$myCar = array("Audi", 2015, 75.304);
print_r($myCar);

$cars2 = array("Volve", "Chevy", "Volkswagen");

$cars = array_merge($cars, $cars2);

echo "<br>";
print_r($cars);

//Multidimensional Arrays

//Expensive
//Audi, Mercedes, BMW

//Inexpensive
//Volvo, Ford, Toyota

$cars = array(
    "Expensive" => array("Audi", "Mercedes", "BMW"),
    "Inexpensive" => array(array(), "Ford", "Toyota")
);

echo $cars["Inexpensive"][2];

// create a list of all months in a year , print the your name and 3 other studnets name with their birthday month




?>
    
</body>
</html>