<?php 

$conn= new mysqli('localhost','root','','tms_db')or die("Could not connect to mysql".mysqli_error($con));


$conn1= new mysqli('localhost','root','','data')or die("Could not connect to mysql".mysqli_error($con));

$db = mysqli_connect("localhost", "root", "", "data");