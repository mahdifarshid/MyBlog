<?php
require_once '../functions.php';
include_once '../section/header.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (doLogin($username,$password)) {
            header('Location: Panel/index.php');
            die;
        }else{
        e("شما با خطا مواجه شدید.","alert-danger");
    }

}

require 'Login.view.php';
