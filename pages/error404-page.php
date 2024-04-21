<?php
  require_once __DIR__ . '/../php/reg-auth/config.php';
  require_once __DIR__ . '/../php/helpers/save-url.php';
  
  if(isset($_SESSION['latestUrl'])){
    echo $twig->render('page404.twig', [ 'linkText' => 'Вернуться назад', 'link' =>  $_SESSION['latestUrl']]);
  } else{
    echo $twig->render('page404.twig', ['linkText' => 'Вернуться на главную', 'link' =>  $homePageUri]);
  }  

?>