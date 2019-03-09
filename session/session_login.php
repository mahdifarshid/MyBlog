<?php
session_start();

define("USERNAME", "mostafa");
define("PASSWORD", "Admin1234@!!");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        if ($username == USERNAME && $password == PASSWORD) {
            $_SESSION['username'] = $username;
            header('location:../index.php');
            die;
        }
    }
}


require 'Login.view.php';
