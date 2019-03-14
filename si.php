<?php
include 'functions.php';
require_once 'Panel/config.php';
include 'section/header.php';

$FullName = $_POST['FullName'];
$email = $_POST['email'];
$username1 = $_POST['username'];
$password1 = $_POST['password'];
$PasswordConfirm = $_POST['ConfirmPassword'];

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($password1 == $PasswordConfirm) {
            $dbPDO = new PDO('mysql:host='.$host.';dbname='.$namedb, $username, $password);
            $Result = $dbPDO->prepare("INSERT INTO users(FullName, Email, Password, username) VALUES (:Fullname,:Email,:Password,:username)");
            $Result->bindParam(':Fullname', $FullName);
            $Result->bindParam(':Email', $email);
            $Result->bindParam(':Password', getHash($password1));
            $Result->bindParam(':username', $username1);
            $Result->execute();
            echo $dbPDO->errorInfo();
            e("اطلاعات شما با موفقیت ثبت شد", "alert-success");
        } else {
            e("رمز عبور و تکرار رمزعبور باهم برابر نمی باشد.", "alert-danger");
        }
   }
} catch (PDOException $e) {
    e($e, "alert-danger");
}
?>
