<?php

$db = mysqli_connect("localhost","root","root","project2");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{		
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $product = $_POST['product'];
    $transac_via = $_POST['transac_via'];
    $comment = $_POST['comment'];

    $insert = mysqli_query($db,"INSERT INTO `form`(`firstname`, `lastname`, `email`, `mobileno`, `product`, `transac_via`, `comment`) VALUES ('$firstname', '$lastname', '$email', '$mobileno', '$product', '$transac_via', '$comment')");

    if(!$insert)
    {
        echo mysqli_error($db);
    }
    else
    {
        echo "ordered.";
    }
}

mysqli_close($db); // Close connection
?>