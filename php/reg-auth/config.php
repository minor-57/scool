<?php
session_start();
const DB_HOST = 'localhost';
const DB_PORT = '6033';
const DB_NAME = 'catalog-data';
const DB_USER = 'root';
const DB_PASS = '';

require_once $_SERVER['DOCUMENT_ROOT'] . '/school/scool/include/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/school/scool/include/templates/');
$twig = new \Twig\Environment($loader);
?>
