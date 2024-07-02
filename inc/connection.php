<?php
//create connection using mysqli_connect(host name,username,password,databasename)
$conn=mysqli_connect('localhost','root','','quran_project');


//to return json file
header('Content-Type: application/json');
header('Access-Allow-Origin: *');
