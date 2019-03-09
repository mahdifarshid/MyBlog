<body>
<div class="container-fluid">

    <?php
    require_once 'Panel/config.php';
    $mypdo = new PDO("mysql:host=$host;dbname=$namedb", $username, $password);
    $result = $mypdo->prepare("SELECT * From posts");
    $result->execute();
    echo "<br/><br/><br/><br/>";
    $fetch = $result->fetchAll();
    foreach ($fetch as $row) {
         echo "<div class=\"card margin \">";
         echo "<div class=\"card-header text-white bg-info\">"."<b>".$row['Title']."</b>"."</div>";
         echo "<div class=\"card-body\">";
         echo "<p class=\"text-body\">" . $row['Description'] . "</p>";
         echo "</div>";
         echo "</div>";
        }

    ?>


