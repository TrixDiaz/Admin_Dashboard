<?php
    require '../.././assets/partials/_functions.php';

    $conn = db_connect();

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["userRegister"]))
    {
        // echo "<pre>";
        // var_export($_POST);
        // echo "</pre>";

        $fullName =$_POST["lastName"] . " " . $_POST["firstName"] . " " . $_POST["middleName"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_confirmation = $_POST["password_confirmation"];  
        $role = $_POST['role'];

        // Check if the username already exists
        $user_exists = exist_user($conn, $username);
        $signup_sucess = false;

        if($_POST["password"] != $_POST["password_confirmation"])
        {
                header("location: ../.././index.php?error=Password created does not match!");
        }
        elseif(!$user_exists)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_fullname`, `user_password`, `role`, `user_created`) VALUES ('$username', '$fullName', '$hash', '$role',current_timestamp());";

            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
                $signup_sucess = true;
                header("location: ../.././index.php?success=Account Successfully Created!");
               
            }
        }
        
        else
        {
        header("location: ../.././index.php?error=Account is alreadt Exist!");
        }
       
    }

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Error</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv = "refresh" content = "0; url = .././index.php"/>
   </head>
</html>