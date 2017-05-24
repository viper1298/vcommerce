<?php
$con = mysqli_connect("localhost","root","","ecommerce");
if(mysqli_connect_errno())
{
	echo "Faled to connect to MySql." .mysqli_connect_error();
}
?>