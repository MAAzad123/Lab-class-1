<?php
// task 1
function relation($cele, $meye){
    $valocele = 21;
    $valomeye = 18;
    if ($cele == $valocele and $meye == $valomeye){
        echo "Your are suitable for marriage. So don't delay.";        
    }else {
        echo "You have to grow a little more.";
    }
}
relation (21, 18);
echo '<br>';
echo "task 1 complete.";
echo '<br>';
echo '<br>';

// // task 2

function ctof($c){
    $f = (9*$c/5)+32; 
    return $f;
}
function ftoc($f){
    $c= (5*($f-32))/9;
    return $c;
}
$c = 98;
$f = -459.68;

if ($f >= -459.67){
    $c= ftoc ($f);
    echo "$f degrees Fahrenheit is equal to $c degrees Celsius";
}else {
    echo "Infinite cold. Fahrenheit value cannot be less than -459.67";
}

echo '<br>';

if ($c >= -273.15){
    $f = ctof ($c);
    echo "$c degrees Celsius is equal to $f degrees Fahrenheit";
}else {
    echo "Infinite cold. Fahrenheit value cannot be less than -273.15";
}
echo '<br>';
echo "task 2 complete.";
echo '<br>';
echo '<br>';

// task 3

function marks($num){
    if ($num >=80 and $num <=100){
        echo "A+";       
} elseif ($num >=70 and $num <80) {
    echo "A";
} elseif ($num >=60 and $num <70) {
    echo "A-";
}elseif ($num >=50 and $num <60) {
    echo "B";
}elseif ($num >=40 and $num <50) {
    echo "C";
}elseif ($num >=33 and $num <40){
    echo "D";
}elseif ($num >=0 and $num <33) {
    echo "Prepare for next time";
}else {
    echo "Invalid Number. Atharva focus on work.";
}
}
marks(30);
echo '<br>';
echo "task 3 complete.";

echo '<br>';
echo '<br>';

// task 4

function multiplication($num){
    for ($i=1; $i <= 10; $i++)
    echo $num. "*".$i. "=". ($num*$i). "<br>";
}
multiplication (5);
echo '<br>';
echo "task 4 complete.";
echo '<br>';
echo '<br>';


// task 5

function password ($usermail, $userpassword){
    $mail = "monsurahmadazad@gmail.com";
    $pass = 123456;
    if ($usermail == $mail){
        if ($userpassword == $pass){
            echo "Welcome to our site.";
        }else {
            echo "Wrong Password";
        }        
    }else {
        echo "Enter correct email.";
    }
}
password ("monsurahmadazad@gmail.com", 123456);
echo '<br>';
echo "task 5 complete.";