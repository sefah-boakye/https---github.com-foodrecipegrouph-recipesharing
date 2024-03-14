<?php

include('connection.php');
 $Name=$_POST['Name'];

 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO register (name,email,password, confirm password) VALUES ('$Name','$email','$password', '$confirmpassword')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location:index.php");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: inde.php");
        }
    }
   
?>