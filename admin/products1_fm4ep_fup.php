<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$platform1_link = $_POST['platform1_link'];
$platform1_title = $_POST['platform1_title'];
$platform1_text = $_POST['platform1_text'];
$platform1_button = $_POST['platform1_button'];

$platform1 = sprintf(
  'UPDATE `platform` SET `link` = "%s", `title` = "%s", `text` = "%s", `button` = "%s" WHERE `platform`.`number` = 1',
  $platform1_link,
  $platform1_title,
  $platform1_text,
  $platform1_button
);

$result = $link->query($platform1);


// 如果編輯成功
header('Location: ej03xu3.php');
?>