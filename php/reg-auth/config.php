<?php

const DB_HOST = 'localhost';
const DB_PORT = '6033';
const DB_NAME = 'reg-auth';
const DB_USER = 'root';
const DB_PASS = '';

require_once $_SERVER['DOCUMENT_ROOT'] . '/scool/include/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/scool/include/templates/');
$twig = new \Twig\Environment($loader);
?>
