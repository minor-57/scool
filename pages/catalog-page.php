<?php
require_once __DIR__ . '/../php/reg-auth/config.php';
// require_once __DIR__ . '/../php/reg-auth/auth-check.php';
require_once __DIR__ . '/pages-data.php';

if(!(isset($_GET['page']) && isset($_GET['type']) && isset($_GET['sec']) && isset($_GET['lvl']))){
    header('Location: error404-page.php');
    exit();
}

$elName = $_GET['page'] . '-' . $_GET['type'] . '-' . $_GET['sec'] . '-' . $_GET['lvl'];

if(!array_key_exists($elName, $pagesData)){
    header('Location: /scool/pages/error404-page.php');
    exit();
};



if($pagesData[$elName]['videos']){
    require_once __DIR__ . '/catalog-videos-data.php';
    echo $twig->render('catalog-video.twig', ['data' => $pagesData[$elName], 'videos' => isset($videoData[$elName]) ? $videoData[$elName] : false]);
}
else{
    echo $twig->render('catalog-video.twig', ['data' => $pagesData[$elName], 'videos' => false]);
}

require_once __DIR__ . '/../php/helpers/save-url.php';




