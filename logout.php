<?php
require_once("config.php");
session_destroy();
header("refresh:0; url=register.php");
?>