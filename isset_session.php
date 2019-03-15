<?php

class isset_session
{

   public function issession()
    {


        session_start();

        if (!isset($_SESSION['username'])) {
            header('location:session/Login.view.php');
            die;
        }
        return 0;
    }
}
?>

