<?php

require('vendor/autoload.php');

$faker = Faker\Factory::create();
$conn = mysqli_connect("sql6.freesqldatabase.com","sql6525708","1JupD32AEN","sql6525708");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO sql6525708.PERSON(lastname, firstname, address, logdt) values('".$faker->lastname."','".$faker->firstname."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>
