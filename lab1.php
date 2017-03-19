<?php

$bool1 = True;

$a = 10;
$b = 15;

$float1 = 1.23;

$string1 = "Hello world";

$array1[0] = 1;
$array1[1] = 2;
$array1[2] = 3;

$null1 = NULL;

class prim 
{
	function wtite_prim()
	{
	 echo "Hello";
	}
}

class prim1
{
	function write_prim()
{
echo "Prim";
}
}

$obj2 = new prim1;

$obj = new prim;



echo "<h2>operations with int:</h2> <br>";

$a++;
echo "a++: $a <br>";
$c=-$a;
echo "-a: $c <br>";
$c=$a+$b;
echo "a+b: $c <br>";
$c=$b-$a;
echo "b-a: $c <br>";
$c=$b*$a;
echo "b*a: $c <br>";
/*
$c=$b/$a
echo "b/a: $c <br>";*/
-$a;
$c=$b%$a;
echo "b%a: $c <br>";
$d=($b+5)/($a-1);
echo "(b+5)/(a-1): $d<br>";

echo "<h2>operations with boolean: </h2> <br>";

$bool1++;
echo "Znachenie bool1: $bool1 <br>";
$c=-$bool1;
echo "-bool1: $c<br>";
$bool1+=1;
echo "Znachenie bool1: $bool1 <br>";
$bool1-=1;
echo "Znachenie bool1: $bool1 <br>";
$bool1=$bool1*$bool1;
echo "Znachenie bool1: $bool1 <br>";

echo "<h2>operations with float:</h2> <br>";

$float1++;
echo "float1++: $float1 <br>";
$c=-$float1;
echo "-float1: $c <br>";
$c=$float1+$float1;
echo "float1+float1: $c <br>";
$c=$float1-1;
echo "float1-1: $c <br>";
$c=$float1*$float1;
echo "float1*float1: $c <br>";
$c=$float1/2;
echo "float1/2 $c <br>";

echo "<h2>operations with string:</h2> <br>";

$string1++;
echo "string1++: $string1<br>";
$c=-$string1;
echo "-string1: $c <br>";
$d=$string1+$string1;
echo "string1+string1: $d <br>";
$c=$string1-1;
echo "string1-1: $c <br>";
$c=$string1*$string1;
echo "string1*string1: $c <br>";
$c=$string1/2;
echo "string1/2 $c <br>";

echo "<h2>operations with array:</h2> <br>";

$array++;
echo "array++: $array<br>";

//$c=-$arra;
//echo "-array: $c[0] <br>";

$d=$array+$array;
echo "array+array: $d <br>";
//$c=$array-1;
//echo "string1-1: $c <br>";
//$c=$array*$array;
//echo "string1*string1: $c <br>";
//$c=$array/2;
//echo "string1/2 $c <br>";

echo "<h2>operations with object:</h2> <br>";

//$obj++;
//echo "obj++: $obj<br>";
$c=-$obj;
echo "-obj: $c <br>";
$d=$obj+$a;
echo "obj+obj: $d <br>";
$c=$obj-1;
echo "obj-1: $c <br>";
$c=$obj*$obj;
echo "obj*obj: $c <br>";
$c=$obj/2;
echo "obj/2 $c <br>";

echo "<h2>operations with null:</h2> <br>";

$null1++;
echo "null++: $null1<br>";
$c=-$null1;
echo "-null: $c <br>";
$d=$null1+$null1;
echo "null+null: $d <br>";
$c=$null1-1;
echo "null-1: $c <br>";
$c=$null1*$null1;
echo "null*null: $c <br>";
$c=$null1/2;
echo "null/2 $c <br>";


?>
