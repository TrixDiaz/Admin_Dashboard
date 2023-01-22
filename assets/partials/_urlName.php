<?php
            $conn = db_connect();

            if(!$conn)
                die("Oh Shoot!! Connection Failed");
                 
                
                if(isset($_SESSION["loggedIn"]) == true)
                {

                    $user = $_SESSION["user_id"];
                    $query = "SELECT * FROM users WHERE user_id='$user'";
                    $sql = mysqli_query($conn,$query);
                    $result = mysqli_fetch_assoc($sql);
                }
               
         ?>
         <title><?php echo $result['user_name']; ?> | Dashboard </title> 
          