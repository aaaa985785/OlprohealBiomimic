<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$platform2_link = $_POST['platform2_link'];
$platform2_title = $_POST['platform2_title'];
$platform2_text = $_POST['platform2_text'];
$platform2_button = $_POST['platform2_button'];

$platform2 = sprintf(
  'UPDATE `platform` SET `link` = "%s", `title` = "%s", `text` = "%s", `button` = "%s" WHERE `platform`.`number` = 2',
  $platform2_link,
  $platform2_title,
  $platform2_text,
  $platform2_button
);

$result = $link->query($platform2);


// 如果編輯成功
header('Location: ej03xu3.php');
?>