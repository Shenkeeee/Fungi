<?php
session_start();
session_unset();
session_destroy();

$uzenet = "You have been logged out succesfully.";

header("location: ../home.php?uzenet=" . urlencode($uzenet) );