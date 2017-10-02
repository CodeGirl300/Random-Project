<?php
var username="root";
var host="localhost";
var password="";
var co=mysqli_connect(username,host,password);
if(! co){
	echo"Not connected";
}else{
	echo"connected";
}
?>