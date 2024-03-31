<?php
require_once __DIR__ . '/config.php';
// session_start();

$modalClass = '';
$loginTabClass = ' active';
$registerTabClass = '';
$forceAuth = isset($_SESSION['forse-auth']) ? '<span class="forse-auth">Пожалуйста авторизуйтесь</span>': '';
$authErr = '';
$authInputErr = '';
$registerErr = array(
    "name" => array(
        "class" => '',
        "message" => '',
    ),
    "email" => array(
        "class" => '',
        "message" => '',
    ),
    "password" => array(
        "class" => '',
        "message" => '',
    ),
    "passwordCheck" => array(
        "class" => '',
        "message" => '',
    )
    
);

if(isset($_GET['reg'])){
    $modalClass = ' active';
    if(!$_GET['reg']) {
        $registerTabClass = ' active';
        $loginTabClass = '';
    }
}

if(isset($_SESSION['auth-val']['auth'])){
    $authErr = '<span class="input-error-text">Неверный логин или пароль</span>';
    $authInputErr = ' _error';
}

if(isset($_SESSION['validation']['name'])){
    $registerErr["name"]["message"] = '<span class="input-error-text">' . $_SESSION['validation']['name'] . "</span>";
    $registerErr["name"]["class"] = ' _error';
}

if(isset($_SESSION['validation']['email'])){
    $registerErr["email"]["message"] = '<span class="input-error-text">' . $_SESSION['validation']['password'] . "</span>";
    $registerErr["email"]["class"] = ' _error'; 
}

if(isset($_SESSION['validation']['password'])){
    $registerErr["password"]["message"] = '<span class="input-error-text">' . $_SESSION['validation']['password'] . "</span>";
    $registerErr["password"]["class"] = ' _error'; 
}

if(isset($_SESSION['validation']['passwordCheck'])){
    $registerErr["passwordCheck"]["message"] = '<span class="input-error-text">' . $_SESSION['validation']['passwordCheck'] . "</span>";
    $registerErr["passwordCheck"]["class"] = ' _error'; 
}

echo $twig->render('reg-auth-modal.twig', [
    "modalClass" => $modalClass,
    "loginTabClass" => $loginTabClass,
    "registerTabClass" => $registerTabClass ,
    "forceAuth" => $forceAuth,
    "authErr" => $authErr,
    "authInputErr" => $authInputErr,
    "registerErr" => $registerErr, 
]);
?>