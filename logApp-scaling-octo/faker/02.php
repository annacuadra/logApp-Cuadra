<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect("sql6.freesqldatabase.com","sql6525708","1JupD32AEN","sql6525708");

    if(!$conn)
    {   
    die(mysqli_error());
    }  
     
    for ($i=0; $i<20; $i++){
        $sql = "INSERT INTO sql6525708.cardDetail(creditCardType,creditCardNumber,creditCardExpirationDate,userIdNumber)
                values('".$faker->creditCardType."','".$faker->creditCardNumber.
                        "','".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."','".$faker->randomDigit(0, 100)."')";
    
        mysqli_query($conn, $sql);
    }
?>