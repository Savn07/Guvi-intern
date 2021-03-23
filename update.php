<?php
    $db = new mysqli('localhost', 'root', '', 'registration');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $username = $_POST['username'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];

    $sql = $db->prepare("UPDATE users SET age=?, dob=?, contact=? WHERE username=?");
    $sql->bind_param('isss', $age, $dob, $contact, $username );

    $sql->execute();

    if ($sql->error) {
        echo "<script> alert('Please Enter Valid Username & Details!');</script>";
    } 
    else {
        echo "<script> window.location.href='home.html';</script>";
    }
    $sql->close();
    $db->close();
?>