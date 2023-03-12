<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//banner更新
$banner_text = $_POST['banner_text'];
$banner_text2 = $_POST['banner_text2'];
$banner_button = $_POST['banner_button'];
$banner_link = $_POST['banner_link'];

$banner = sprintf(
  'UPDATE `banner` SET `text` = "%s", `text2` = "%s", `button` = "%s", `link` = "%s" WHERE `banner`.`number` = 1',
  $banner_text,
  $banner_text2,
  $banner_button,
  $banner_link
);

$result = $link->query($banner);


// 如果編輯成功
header('Location: ej03xu3.php');
?>