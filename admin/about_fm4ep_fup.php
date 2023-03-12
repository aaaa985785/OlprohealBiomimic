<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$about_title = $_POST['about_title'];
$about_text = $_POST['about_text'];
$about_footer = $_POST['about_footer'];

$about = sprintf(
  'UPDATE `about` SET `title` = "%s", `text` = "%s", `footer` = "%s" WHERE `about`.`number` = 1',
  $about_title,
  $about_text,
  $about_footer
);

$result = $link->query($about);


// 如果編輯成功
header('Location: ej03xu3.php');
?>