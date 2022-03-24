<?php

//initialize variables
$a="";
$b="";
$c="";
$d="";
$e=000;
$f=000;


//connewct to database
$db = mysqli_connect('localhost','root','','inventorymanagement');


//if save button is clicked
if(isset($_POST['save'])){


    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_POST['f'];

    $query = "INSERT into inventory (itemCode,itemName,catagory,brand,quantity,price) values ('$a','$b','$c','$d','$e','$f')";
    mysqli_query($db,$query);
    header('location:indexTwo.php');//return to indexTwo.html after insertion

}

?>