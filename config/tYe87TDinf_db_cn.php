<?php
$host = 'localhost';
$dbuser ='micolpro';
$dbpassword = 'Hh$A)+%o-&$8';
$dbname = 'mimicolpro';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$link){
    mysqli_query($link,'SET NAMES uff8');
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
?>
