<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$platform3_link = $_POST['platform3_link'];
$platform3_title = $_POST['platform3_title'];
$platform3_text = $_POST['platform3_text'];
$platform3_button = $_POST['platform3_button'];

$platform3 = sprintf(
  'UPDATE `platform` SET `link` = "%s", `title` = "%s", `text` = "%s", `button` = "%s" WHERE `platform`.`number` = 3',
  $platform3_link,
  $platform3_title,
  $platform3_text,
  $platform3_button
);

$result = $link->query($platform3);


// 如果編輯成功
header('Location: ej03xu3.php');
?>