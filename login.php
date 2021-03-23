<?php
    $db = new mysqli('localhost', 'root', '', 'registration');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password );

    $sql->execute();
    $sql_result = $sql->get_result();

    if ($sql_result->num_rows == 1) {
        echo "<script> window.location.href='update.html';</script>";
    } 
    else {
        echo "<script> alert('Please Enter Valid Email & Password!'); </script>";
    }
    $sql->close();
    $db->close();
?>
