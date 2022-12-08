<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

// do while

$cookie = 1;

do {
    echo "I love cookies! <br>";
    $cookie ++;
} while ($cookie < 0);

echo "<br>";

// while 
$num1 = 0;
$num2 = 1;
$counter = 0;

while ($counter < 10) {
    echo ' '. $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter++;
}



// for 

for ($x = 1; $x <= 10; $x++) {
    echo "The number is: " . $x;
    echo "<br>";
}


//EXERCISE
//Going to the bank on the 1st of January
//Want to deposit 1000 dollars.
//Interest rate is 5%
//Withdrawl it after 5 years


$deposit = 1000;
$interest = 0.05;

for ($years = 1; $years <= 5; $years++) {
    $deposit += ($deposit * $interest);
    echo "The total amount after " . $years . " year is: " . $deposit;
    echo "<br>";
}

// for each

$names = array("John", "Michael", "David");

foreach ($names as $name) {
    echo "My name is " . $name;
    echo "<br>";
}

$person = array("Name" => "Dary", "Age" => 30, "Gender" => "Male");

foreach($person as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
}

// switch

//Conditional statement - Switch

$role = "Employee";

switch ($role) {
    case 'Visitor':
        echo "Welcome Visitor!";
    break;
    case 'Admin':
        echo "Welcome Admin!";
    break;
    case 'Superadmin':
        echo "Welcome Superadmin!";
    break;
    case 'Boss':
        echo "Welcome Boss!";
    break;
    default:
        echo "User has no role!";
}







?>
    
</body>
</html>