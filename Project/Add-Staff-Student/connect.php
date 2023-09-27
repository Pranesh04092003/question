<?php

$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='signupforms';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

if(!$con){
  die(myspli_error($con)); 
}



?>