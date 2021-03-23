<?php
    $db = new mysqli('localhost','root','','registration');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = $db->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
    $sql->bind_param('sss',$username,$email,$password);

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql->execute();

    echo "<script type='text/javascript'>alert('Registered Successfully. Login to Continue!'); window.location.href='login.html';</script>";

    $sql->close();
    $db->close();
?>