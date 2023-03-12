<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$new2_title = $_POST['new2_title'];
$new2_text = $_POST['new2_text'];
$new2_link = $_POST['new2_link'];
$new2_button = $_POST['new2_button'];

$new2 = sprintf(
  'UPDATE `news` SET `title` = "%s", `text` = "%s", `link` = "%s", `button` = "%s" WHERE `news`.`number` = 2',
  $new2_title,
  $new2_text,
  $new2_link,
  $new2_button
);

$result = $link->query($new2);


// 如果編輯成功
header('Location: ej03xu3.php');
?>