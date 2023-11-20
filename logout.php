<?php
if (session_status() === PHP_SESSION_NONE || session_) {
    session_start();
}
session_destroy();

header('location: index.php');
?>