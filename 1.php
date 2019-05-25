<?php
header("Content-Type:text/html; charset=utf-8");
$con = mysqli_connect("sql12.freemysqlhosting.net","sql12293251","WPzLK2JHir","sql12293251");
 
// Check connection
if (mysqli_connect_errno())
 {
 echo "無法連線到MySQL: " . mysqli_connect_error();
 }
 
// Perform queries
mysqli_query($con,"SET CHARACTER SET UTF8");
$sql="SELECT * FROM mouse ORDER BY phone DESC, address DESC,product DESC,total DESC";
$result = mysqli_query($con,$sql);
 
$json = array();
if(mysqli_num_rows($result)){
 while($row=mysqli_fetch_assoc($result)){
   $json[]=$row;
 }
}
echo urldecode(json_encode($json));
 
mysqli_close($con);
?>