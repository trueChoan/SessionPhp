<?php
session_start();
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
}
header("Location: /cart.php");
