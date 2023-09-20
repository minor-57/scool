<?php
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `users` (name,surname,email,password) VALUES ('$name', '$surname', '$email', '$pass')";
    
    $servername = "localhost";
    $username = "a0860164_logined-user";
    $password = "testtest";
    $dbname = "a0860164_logined-user";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        echo "<script>console.log('ошибка' );</script>";
    }

    $conn -> query($sql);