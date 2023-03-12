<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$platform4_link = $_POST['platform4_link'];
$platform4_title = $_POST['platform4_title'];
$platform4_text = $_POST['platform4_text'];
$platform4_button = $_POST['platform4_button'];

$platform4 = sprintf(
  'UPDATE `platform` SET `link` = "%s", `title` = "%s", `text` = "%s", `button` = "%s" WHERE `platform`.`number` = 4',
  $platform4_link,
  $platform4_title,
  $platform4_text,
  $platform4_button
);

$result = $link->query($platform4);


// 如果編輯成功
header('Location: ej03xu3.php');
?>