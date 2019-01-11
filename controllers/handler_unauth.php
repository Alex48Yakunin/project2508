<?php

session_start();
$_SESSION=[];
session_destroy();
header('Location: main_page.php');die;
