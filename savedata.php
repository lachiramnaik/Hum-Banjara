<?php
echo $banjara_name=$_POST['sname'];

echo $banjara_mail=$_POST['mail'];
echo $banjara_password=$_POST['password'];
echo $banjara_country=$_POST['country'];
echo $banjara_state=$_POST['state'];
echo $banjara_photo=$_POST['photo'];

$conn=mysqli_connect("localhost","root","","banjara") or die("conection failed"); //connection start
$sql="INSERT INTO hum-banjara(FULL NAME,MAIL ID,PASSWORD,COUNTRY,STATE,PHOTO) VALUES('{$banjara_name}','{$banjara_mail}','{$banjara_password}','{$banjara_country}','{$banjara_state}',
'{$banjara_photo}')"; //connetion values insert cheyadam
$result=mysqli_query($conn, $sql) or die("query unsucssful"); //query connection linking

header("Location: http://localhost/Hum-Banjara/index.html");

mysqli_close($conn);

?>