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

    <title>Login</title>
</head>
<body>
<br>
<center>
    <div class="container">
        <h1>ثبت نام</h1>
        <div  class="card w-50 text-dark border-1  rounded">
            <div class="card-body">

                <form action="session_login.php" method="post">
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">نام کامل </label>
                        <input type="text" placeholder="نام کامل" class="form-control text-right" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">ایمیل </label>
                        <input type="text" placeholder="ایمیل" class="form-control text-right" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputEmail1">نام کاربری </label>
                        <input type="text" placeholder="نام کاربری" class="form-control text-right" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" >

                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputPassword1">رمز عبور </label>
                        <input type="password" placeholder="رمزعبور" class="form-control text-right " name="password" id="exampleInputPassword1">
                    </div>
                    <div class="form-group text-right">
                        <label for="exampleInputPassword1">تکرار رمزعبور</label>
                        <input type="password" placeholder="تکرار رمزعبور" class="form-control text-right " name="confirmpassword" id="exampleInputPassword1">
                    </div>
                    <a class="btn-link float-right" href="/">بازگشت به صفحه اصلی</a><br/>

                    <center><button type="submit" class="btn btn-primary">ثبت نام</button></center>
                </form>
            </div>
        </div>
    </div>
</center>
