<?php
    $latestPageUrl = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME'];
    $homePageUri = $_SERVER['DOCUMENT_ROOT'] . '/inxdex.php';

    if(!(pathinfo($latestPageUrl)['filename'] == 'error404-page')) $_SESSION['latestUrl'] = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>