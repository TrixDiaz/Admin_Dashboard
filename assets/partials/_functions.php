<?php
function db_connect()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test-admin-dashboard';

    $conn = mysqli_connect($servername, $username, $password, $database);
    return $conn;
}

function exist_user($conn, $username)
{
    $sql = "SELECT * FROM `users` WHERE user_name='$username'";

    $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num)
        {
            return true;
        }
        else
        {
            return false;
        }
        

}
?>