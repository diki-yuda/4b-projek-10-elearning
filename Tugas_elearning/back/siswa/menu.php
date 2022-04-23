<?php
if (isset($_SESSION['id']) == "") {
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: login.php");
}