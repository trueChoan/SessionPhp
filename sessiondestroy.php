<?php

unset($_SESSION['loginname']);
session_destroy();
header("Location: /login.php");

exit();
