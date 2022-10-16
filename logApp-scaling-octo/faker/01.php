<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect("sql6.freesqldatabase.com","sql6525708","1JupD32AEN","sql6525708");

    if(!$conn)
    {   
    die(mysqli_error());
    }  

    for ($i=0; $i<100; $i++){
        $sql = "INSERT INTO sql6525708.userAccount(email, lastName, firstName, userName, password) 
                values('".$faker->email."','".$faker->lastName."','".$faker->firstName('male'|'female').
                       "','".$faker->userName."','".$faker->password."')";
    
        mysqli_query($conn, $sql);
    }
?>