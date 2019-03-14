<?php

function e($text, $type = "alert-info")
{

    echo "<div class=\"container\">";
    echo "<div class=\"alert  margin $type\">";
    echo "<strong>$text</strong>";
    echo "</div>";
    echo "</div>";
}


function getpost(){
   global $host,$namedb,$username,$password;
    require_once 'Panel/config.php';
    $mypdo = new PDO("mysql:host=$host;dbname=$namedb", $username, $password);
    $result = $mypdo->prepare("SELECT * From posts");
    $result->execute();
    echo "<br/><br/>";
    $fetch = $result->fetchAll();
    foreach ($fetch as $row) {
        echo "<div class=\"card margin \">";
        echo "<div class=\"card-header text-white bg-info\">"."<b>".$row['Title']."</b>"."</div>";
        echo "<div class=\"card-body\">";
        echo "<p class=\"text-body\">" . $row['Description'] . "</p>";
        echo "</div>";
        echo "</div>";
    }
}
function getHash($str)
{
    $saltStr = 'l0calhost';
    $hash = sha1($saltStr . md5($str . $saltStr));
    return $hash;
}

function dologin(){

}

?>
