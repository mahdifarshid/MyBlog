<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark float-right text-white border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Panel Admin</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action text-white bg-dark">Send
                Post</a>
        </div>
        <div class="list-group list-group-flush">
            <a href="../logout.php" class="list-group-item list-group-item-action text-white bg-dark">Send
                logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">


            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Amin malekzdeh
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"
                             aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Setting</a>
                            <a class="dropdown-item" href="../logout.php">Exit</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        $title = $_POST['title'];
        $description = $_POST['description'];
        include_once '../functions.php';
        require 'config.php';
        try {
            $myPDO = new PDO("mysql:host=$host;dbname=$namedb", $username, $password);
            $query = "SELECT COUNT(*) from posts where Title=:title and Description=:description";
            $countResult = $myPDO->prepare($query);
            $countResult->bindParam(':title', $title);
            $countResult->bindParam(":description", $description);
            $countResult->execute();
         $count =  $countResult->fetch()[0] ;
            if($count==0){
                    $result = $myPDO->prepare("INSERT INTO posts(Title, Description) VALUES (:title,:description)");
                    $result->bindParam(':title', $title);
                    $result->bindParam(":description", $description);
                    if($result->execute()){
                        e("Successfuly insert data to Database $namedb", "alert-success");
                    }
            }
        } catch (PDOException $e) {
            e("Error: " . $e->getMessage(), "alert-danger");
        }
                ?>


        <div class="container-fluid">
            <form action="index.php" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title :</label>
                    <input name="title" type="Text" class="form-control"
                           id="exampleFormControlInput1" placeholder="Hello World!">
                    <label for="exampleFormControlInput1">Description :</label>
                    <textarea name="description" class="form-control"
                              id="exampleFormControlTextarea1" rows="3" required></textarea><br/>
                    <input type="submit" class="btn btn-primary" value="Send">
                </div>
            </form>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
