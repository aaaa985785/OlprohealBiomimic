<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$platform5_link = $_POST['platform5_link'];
$platform5_title = $_POST['platform5_title'];
$platform5_text = $_POST['platform5_text'];
$platform5_button = $_POST['platform5_button'];

$platform5 = sprintf(
  'UPDATE `platform` SET `link` = "%s", `title` = "%s", `text` = "%s", `button` = "%s" WHERE `platform`.`number` = 5',
  $platform5_link,
  $platform5_title,
  $platform5_text,
  $platform5_button
);

$result = $link->query($platform5);


// 如果編輯成功
header('Location: ej03xu3.php');
?>