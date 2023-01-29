<?php

require '_functions.php';

$conn = db_connect();

if(!$conn)
    die("Oh Shoot!! Connection Failed");


    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateProfile"]))
    {
        $username = $_POST["username"];
        $lastName = $_POST["lastName"];
        $firstname = $_POST["firstName"];
        $middlename = $_POST["middleName"];
        $contact = $_POST["contact"];
        $birthdate = $_POST["birthdate"];

        if(empty($_POST['lastName']) && empty($_POST['firstName']))
        {
            header("location: ../../admin/dashboard.php?error= Please Provide Last name and First name in order to be successfully update your profle.");
        }
        if(empty($_POST['birthdate']) && empty($_POST['contact_number']))
        {
            header("location: ../../admin/dashboard.php?error= Please Provide Birth Date and Contact Number in order to be successfully update your profle.");
        }
        else
        {
            $sql = "UPDATE `users` SET user_lastname = '$lastName', user_firstname = '$firstname', user_middlename = '$middlename',  contact_number = '$contact', birth_date = '$birthdate' WHERE user_name='$username'";

            if(mysqli_query($conn, $sql))
            {
                header("location: ../../admin/dashboard.php?success=Profile Successfully Update");
            }
        }
    }

?>