<?php
include_once __DIR__ . '/../reg-auth/config.php';



$target = $_POST['target'];
$home= $_POST['home'];
$name = $_POST['target'] == 'folder' ? $_POST['folder-name'] : $_POST['video-name'];
$link = $_POST['target'] == 'folder' ? $_POST['folder-link'] : $_POST['video-link'];
$section = $_POST['section'];

$_SESSION['test'] = $target . '  ' . $home . '  ' . $name . '  ' . $link . '  ' . $section;

if($home == 'main') {
    $home = $section . '-vid-main';
}

[$subject, $exam, $globalSection, $level] = explode('-', $home);
$subjectDat = '';
$examDat = '';
switch ($subject) {
    case 'math':
        $subjectDat = 'математика&математике';
        break;
    case 'him':
        $subjectDat = 'химия&химии';
        break;
    case 'fiz':
        $subjectDat = 'физика&физике';
        break;
    case 'inf':
        $subjectDat = 'информатика&информатике';
        break;
}
$examDat = $exam == 'ege' ? 'егэ' : 'огэ';

try {
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

}
catch(PDOException $e) {
    $_SESSION['db-err'] = 'не удалось подключиться к бд';
    die('Что-то пошло не так: '. $e->getMessage());
}

if($target == 'folder'){
    $query = "INSERT INTO pages (name, exam, subject, lVideo, lTasks) VALUES (:name, :exam, :subject, :lVideo, :lTasks)";
    $stmt = $conn->prepare($query);
    $params = [
        'name' => $subject . '-' . $exam . '-' . $globalSection . '-' . $link,
        'exam' => $examDat,
        'subject' => $subjectDat,
        'lVideo' => "catalog-page.php?page=" . $subject ."&type=" . $exam ."&sec=vid&lvl=main",
        'lTasks' => $suject == 'math' ? "catalog-ege-math-2024-tasks/catalog-ege-math-tasks.php" : "#",
    ];
    
    try {
        $stmt -> execute($params);
    }
    catch(PDOException $e){
        $_SESSION['db-fail'] = $e->getMessage();
    }

    $query = "INSERT INTO folders (name, link, home) VALUES (:name, :link, :home)";
    $stmt = $conn->prepare($query);
    $params = [
        'name' => $name,
        'link' => "catalog-page.php?page=" . $subject ."&type=" . $exam . "&sec=" . $globalSection . "&lvl=" . $link,
        'home' => $home,
    ];
    $stmt -> execute($params);
}
if($target == 'video'){
    $_SESSION['vid-tr'] = 'ok';
    $query = "INSERT INTO videos (link, title, home) VALUES (:link, :title, :home)";
    $stmt = $conn->prepare($query);
    $params = [
        'link' => $link,
        'title' => $name,
        'home' => $home,
    ];
    try {
        $stmt -> execute($params);
    }
    catch(PDOException $e){
        $_SESSION['db-fail-vid'] = $e->getMessage();
    }
}
