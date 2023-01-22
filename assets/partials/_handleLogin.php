<?php
    require '_functions.php';
    $conn = db_connect();

    $empty = "Fill all the fields.";

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"]))
    {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE user_name='$username';";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result))
        {
            $hash = $row['user_password'];
            if(password_verify($password, $hash))
            {

                // Login Sucessfull
                session_start();
                $_SESSION["loggedIn"] = true;
                $user = $_SESSION["user_id"] = $row["user_id"];
                if($row['role']=='ADMIN')
                {
                    header("location: ../../admin/dashboard.php?id=$user");
                    exit;
                }
                elseif($row['role']=='USER')
                {
                    header("location: ../../user/dashboard.php?id=$user");
                    exit;
                }
               
            }
                
                 // Login failure
                 $error = true;
                 header("location: _error.php?error=$error");
                 exit;
               
            
        }
    }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Error</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv = "refresh" content = "0; url = _error.php"/>
   </head>
</html>