<?php

session_start();
session_destroy();

header('location: ./employeur/login_employeur.php');

?>