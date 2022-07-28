<?php

session_start();

$cname = $_GET["cname"];

$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");
if (mysqli_select_db($con,'project') === false)
    die("Could not select database");

$sql = "INSERT INTO categorys (cname) VALUES (\"{$cname}\")";
$prompt = "";
$sql_insert = mysqli_query($con,$sql);
echo $sql_insert;

?>