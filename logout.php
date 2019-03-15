<?php

session_start();


session_destroy();

header('location:session/Login.view.php');
die;
