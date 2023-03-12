<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }

//導覽列
$id = $_POST['field1'];
$id2 = $_POST['field2'];
$id3 = $_POST['field3'];
$id4 = $_POST['field4'];
$id5 = $_POST['field5'];
$id6 = $_POST['field6'];
$id7 = $_POST['field7'];

$sql = sprintf(
  'UPDATE `nav` SET `field1` = "%s", `field2` = "%s", `field3` = "%s", `field4` = "%s", `field5` = "%s", `field6` = "%s", `field7` = "%s" WHERE `nav`.`number` = 1',
  $id,
  $id2,
  $id3,
  $id4,
  $id5,
  $id6,
  $id7
);

$result = $link->query($sql);

//banner更新
//   $banner_text = $_POST['banner_text'];
//   $banner_text2 = $_POST['banner_text2'];
//   $banner_button = $_POST['banner_button'];
//   $banner_link = $_POST['banner_link'];

//   $banner = sprintf(
//     'UPDATE `banner` SET `text` = "%s", `text2` = "%s", `button` = "%s", `link` = "%s" WHERE `banner`.`number` = 1',
//     $banner_text, $banner_text2, $banner_button, $banner_link
//   );

//   $result = $link->query($banner);


// 如果編輯成功
header('Location: ej03xu3.php');
?>