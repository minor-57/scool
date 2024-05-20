<?php
   require_once __DIR__ . '/../php/reg-auth/config.php';
   // require_once __DIR__ . '/pages-data.php';
   // require_once __DIR__ . '/catalog-videos-data.php';

   try {
      $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

  }
  catch(PDOException $e) {
      die('Что-то пошло не так: '. $e->getMessage());
  }

//   $counter = 0;

//   foreach($pagesData as $key=>$pgD){
//    $query = "INSERT INTO folders (name, link, home) VALUES (:name, :link, :home)";
//    if(!empty($pgD['folders'])){
//       foreach($pgD['folders'] as $fldr){
//          $params = [
//             'name' => $fldr['name'],
//             'link' => $fldr['link'],
//             'home' => $key,
//         ];
//         $stmt = $conn->prepare($query);
//         try {
//          $stmt -> execute($params);
//          }
//          catch(PDOException $e) {
//             echo $e->getMessage();
//             continue;
//          }
//       }
//       ++$counter;
//    }

//   }

$pages = array(

   "math-ege-vid-num1_planimetria",
   "math-ege-vid-num3_stereom",
   "math-ege-vid-num10_texttasks",
   "math-ege-vid-num13",
   "math-ege-vid-num18",

   );

$query = "INSERT INTO pages (name, exam, subject, lVideo, lTasks) VALUES (:name, :exam, :subject, :lVideo, :lTasks)";

foreach($pages as $pg){
   $params = [
      'name' => $pg,
      'exam' => 'егэ',
      'subject' => "математика&матеиатике",
      'lVideo' => "catalog-page.php?page=math&type=ege&sec=vid&lvl=main",
      'lTasks' => "catalog-ege-math-2024-tasks/catalog-ege-math-tasks.php"
  ];
  $stmt = $conn->prepare($query);
  try {
   $stmt -> execute($params);
   }
   catch(PDOException $e) {
      echo $e->getMessage();
   }
}
