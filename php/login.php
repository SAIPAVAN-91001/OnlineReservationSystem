<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($username === "admin" && $password === "1234") {

        header("Location: ../dashboard.html");
        exit();

    } else {

        echo "<script>
                alert('Invalid Username or Password');
                window.location.href='../index.html';
              </script>";
        exit();
    }
}

?>