<?php
require_once __DIR__ . '/../php/reg-auth/config.php';
require_once __DIR__ . '/../php/reg-auth/auth-check.php';


if(!(isset($_GET['page']) && isset($_GET['type']) && isset($_GET['sec']) && isset($_GET['lvl']))){
    header('Location: error404-page.php');
    exit();
}

$elName = $_GET['page'] . '-' . $_GET['type'] . '-' . $_GET['sec'] . '-' . $_GET['lvl'];



try {
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

}
catch(PDOException $e) {
    die('Что-то пошло не так: '. $e->getMessage());
}



$stmt = $conn->prepare("SELECT * FROM pages WHERE  `name` = :name");
$stmt -> execute(['name'=>$elName]);
$page = $stmt -> fetch(PDO::FETCH_ASSOC);

if(!$page){
    header('Location: /scool/pages/error404-page.php');
    exit();
};

$stmt = $conn->prepare("SELECT * FROM folders WHERE  `home` = :name");
$stmt -> execute(['name'=>$elName]);
$folders = $stmt -> fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->prepare("SELECT * FROM videos WHERE  `home` = :name");
$stmt -> execute(['name'=>$elName]);
$videos = $stmt -> fetchAll(PDO::FETCH_ASSOC);


if(!$videos){
    $data = array(
        'ex' => $page['exam'],
        'title' => explode('&', $page['subject'])[0],
        'subject' => explode('&', $page['subject'])[1],
        'lVideo' => $page['lVideo'],
        'lTasks' => $page['lTasks'],
        'folders' => $folders
    );
    echo $twig->render('catalog-video.twig', ['data' => $data, 'videos' => false]);
}
else {
    $data = array(
        'ex' => $page['exam'],
        'title' => explode('&', $page['subject'])[0],
        'subject' => explode('&', $page['subject'])[1],
        'lVideo' => $page['lVideo'],
        'lTasks' => $page['lTasks'],
        'folders' => array(),
    );
    echo $twig->render('catalog-video.twig', ['data' => $data, 'videos' => $videos]);
}

 require_once __DIR__ . '/../php/helpers/save-url.php';




