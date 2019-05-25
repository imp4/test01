<?php
header("Content-Type:text/html; charset=utf-8");
$con = mysqli_connect("sql12.freemysqlhosting.net","sql12293251","WPzLK2JHir","sql12293251");
// Check connection
if (mysqli_connect_errno())
 {
 echo "無法連線到MySQL: " . mysqli_connect_error();
 }
 
$user = $_POST['user'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$product = $_POST['product'];
$total = $_POST['total']; 
 
// Perform queries
$sql="INSERT INTO mouse (user, phone, address,product,total) VALUES (CONVERT(_utf8 '$user' USING utf8), '$phone', '$address','$product','$total')";
 
if (mysqli_query($con,$sql)){
  echo "您的資料上傳成功";
}
else {
  echo "您的資料上傳失敗";
}
 
mysqli_close($con);
?>