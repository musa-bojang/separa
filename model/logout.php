<?php
session_start();

require "Util.php";
$util = new Util();

//Clear Session
$_SESSION["id"] = "";
$_SESSION["role"] = "";
$_SESSION["username"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

header("Location: ../index.php");
?>