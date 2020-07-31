<?php

session_start();

session_destroy();

header("location:../vista/v_login.php");

?>