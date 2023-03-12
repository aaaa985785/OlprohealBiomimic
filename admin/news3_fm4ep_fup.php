<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$new3_title = $_POST['new3_title'];
$new3_text = $_POST['new3_text'];
$new3_link = $_POST['new3_link'];
$new3_button = $_POST['new3_button'];

$new3 = sprintf(
  'UPDATE `news` SET `title` = "%s", `text` = "%s", `link` = "%s", `button` = "%s" WHERE `news`.`number` = 3',
  $new3_title,
  $new3_text,
  $new3_link,
  $new3_button
);

$result = $link->query($new3);


// 如果編輯成功
header('Location: ej03xu3.php');
?>