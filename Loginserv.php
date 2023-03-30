<?php

$invalid=''; //variable to store error message

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $invalid = "Incorrect";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $conn = mysqli_connect("localhost", "root", "");
        
        $db = mysqli_select_db($conn, "login_form"); //for the name of the DB

        $query = mysqli_query($conn, "SELECT * FROM client WHERE password='$password' AND username='$username'"); //for the table client in my DB


        $rows = mysqli_num_rows($query);
        
        if($rows == 1){
            header("Location: Login_access.php"); //this to redirect to the other page
        }
        else
        {
            $invalid = "Incorrect";
        }
        mysqli_close($conn);
    }
}

?>