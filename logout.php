<?php

SESSION_start();
SESSION_destroy();
$_SESSION['TheyAreTheSame'] = false;
header("Location: index.php");

?>