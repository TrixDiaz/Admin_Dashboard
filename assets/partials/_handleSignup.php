<?php
    require '_functions.php';

    $conn = db_connect();

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"]))
    {
        // echo "<pre>";
        // var_export($_POST);
        // echo "</pre>";

        $fullName = $_POST["lastName"] . " " . $_POST["firstName"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_confirmation = $_POST["password_confirmation"];  
        $role = $_POST['role'];

        // Check if the username already exists
        $user_exists = exist_user($conn, $username);
        $signup_sucess = false;

        if($_POST["password"] != $_POST["password_confirmation"])
        {
                header("location: ../../admin/signup.php?error=Password does not match!");
        }
        elseif(!$user_exists)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_fullname`, `user_password`, `role`, `user_created`) VALUES ('$username', '$fullName', '$hash', '$role',current_timestamp());";

            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
                $signup_sucess = true;
                header("location: ../../admin/signup.php?success=Account Successfully Created!");
               
            }
        }
        
        else
        {
        header("location: ../../admin/signup.php?error=Account is already Exist!");
        }
       
    }

?>