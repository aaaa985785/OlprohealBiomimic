<?php
require_once('../config/tYe87TDinf_db_cn.php');

//   if (empty($_POST['field1'])) {
//     die('請輸入 id 與 username');
//   }


//news1更新
$footer_address = $_POST['footer_address'];
$footer_tel = $_POST['footer_tel'];
$footer_mail = $_POST['footer_mail'];

$footer = sprintf(
  'UPDATE `footer` SET `address` = "%s", `tel` = "%s", `mail` = "%s" WHERE `footer`.`number` = 1',
  $footer_address,
  $footer_tel,
  $footer_mail
);

$result = $link->query($footer);


// 如果編輯成功
header('Location: ej03xu3.php');
?>