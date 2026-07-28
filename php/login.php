<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username=="admin" && $password=="1234")
{
    header("Location: ../dashboard.html");
}
else
{
    echo "<script>
            alert('Invalid Username or Password');
            window.location='../index.html';
          </script>";
}

?>