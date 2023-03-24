<?php
$con=new mysqli("localhost","root","","shiva");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$sql="select * from test";
$res=$con->query($sql);
echo $res->num_rows;
$con->close();
?>