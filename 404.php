<?php
  require_once __DIR__ . '/php/reg-auth/config.php';
  require_once __DIR__ . '/php/helpers/save-url.php';
  
  echo $twig->render('page404.twig', ['linkText' => 'Вернуться на главную', 'link' =>  $homePageUri]);
?>