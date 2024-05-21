<?php
    require_once __DIR__ . '/../php/reg-auth/config.php';
    require_once __DIR__ . '/../php/reg-auth/auth-check.php';
    require_once __DIR__ . '/../php/reg-auth/admin-check.php';

    try {
        $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
  
    }
    catch(PDOException $e) {
        die('Что-то пошло не так: '. $e->getMessage());
    }
    $stmt = $conn->prepare("SELECT `link`, `name` FROM folders");

    $stmt -> execute();
    $pages = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    for($g = 0; $g < count($pages); $g++){
        $buf = explode('&', explode('?', $pages[$g]['link'])[1]);
        $res = '';
        for($i = 0; $i < count($buf); $i++){
            $buf[$i] = explode('=', $buf[$i])[1];
        };
        $res = implode('-', $buf);
        $pages[$g]['link'] = $res;
        unset($buf);
        unset($res);
    }

    echo $twig->render('constructor.twig', ['pages' => $pages]);
    
    ?>