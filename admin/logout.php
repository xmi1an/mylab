<?php
if (isset($_SESSION['labid'])) {
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');
} elseif (isset($_SESSION['aid'])) {
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');
} else {
    session_start();
    session_unset();
    session_destroy();
    header('location:../index.php');
}
