<?php

session_start();
unset($_SESSION["u"]);
unset($_SESSION["p"]);
header("Location:index.html");
?>

