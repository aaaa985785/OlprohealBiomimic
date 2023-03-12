<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];
$new_link = $_POST['new_link'];
$new_button = $_POST['new_button'];

$new = sprintf(
  'UPDATE `news` SET `title` = "%s", `text` = "%s", `link` = "%s", `button` = "%s" WHERE `news`.`number` = 1',
  $new_title,
  $new_text,
  $new_link,
  $new_button
);

$result = $link->query($new);


// 如果編輯成功
header('Location: ej03xu3.php');
?>