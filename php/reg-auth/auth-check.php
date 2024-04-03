<?php
    session_start();
    if (!isset($_SESSION['auth'])) {
        $_SESSION['forse-auth'] = true;
        header('Location: /index.php?reg=1');
        exit();
    }