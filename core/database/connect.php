 <?php
// inlcude 'core/init.php';
 $connect_error="Sorry,downtime";
 mysql_connect('localhost','root','') or die($connect_error);
 mysql_select_db('lr') or die($connect_error);



 ?>