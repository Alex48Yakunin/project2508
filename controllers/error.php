<?php

require_once "../views/error.php";

$type_error = $_REQUEST["error"];

echo json_encode($type_error);

