<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-4.2.1/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap-4.2.1/dist/css/bootstrap.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
    <title>singup</title>
</head>
<body>
<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username1 = $_POST['username'];
$password1 = $_POST['password'];
$passwordconfirm = $_POST['confirmpassword'];
include 'functions.php';
require_once 'Panel/config.php';

try {
    $dbPDO = new PDO("mysql:host=$host;dbname=$namedb", $username, $password);
    if ($_SERVER["REQUEST_METHOD"] == "post") {
        if ($password1 == $passwordconfirm) {
            getHash($password1);
            $Result = $dbPDO->prepare("INSERT INTO users(FullName, Email, Password, username) VALUES (:FullName,:Email,:Password,:username)");
            $Result->bindParam(':Fullname', $fullname);
            $Result->bindParam(':Email', $email);
            $Result->bindParam(':Password', $password1);
            $Result->bindParam(':username', $username1);
            $Result->execute();
            e("اطلاعات شما با موفقیت ثبت شد", "alert-success");
        } else {
            e("رمز عبور و تکرار رمزعبور باهم برابر نمی باشد.", "alert-danger");
        }
    }
} catch (PDOException $e) {
//    e($e, "alert-danger");
    echo $e;
}


?>

<br>
<center>
    <div class="container">
        <h1>ثبت نام</h1>
        <div class="card w-50 text-dark border-1  rounded">
            <div class="card-body">

                <form action="singup.php" method="post">
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">نام کامل </label>
                        <input type="text" placeholder="نام کامل" class="form-control text-right"
                               name="fullname"/>

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">ایمیل </label>
                        <input type="text" placeholder="ایمیل" class="form-control text-right"
                               name="email"/>

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">نام کاربری </label>
                        <input type="text" placeholder="نام کاربری" class="form-control text-right"
                               name="username" id="exampleInputEmail1" required>

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputPassword1">رمز عبور </label>
                        <input type="password" placeholder="رمزعبور"
                               class="form-control text-right " name="password"
                               id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputPassword1">تکرار رمزعبور</label>
                        <input type="password" placeholder="تکرار رمزعبور"
                               class="form-control text-right " name="confirmpassword"
                               id="exampleInputPassword1" required>
                    </div>
                    <a class="btn-link float-right" href="/">بازگشت به صفحه اصلی</a><br/>

                    <center>
                        <button type="submit" class="btn btn-primary">ثبت نام</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</center>
