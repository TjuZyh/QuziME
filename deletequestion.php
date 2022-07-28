<?php
session_start();

$qid = $_GET["qid"];


$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");

if (mysqli_select_db($con,'project') === false)
    die("Could not select database");

$sql = " DELETE FROM questions WHERE qid = {$qid} ";
$sql_result = mysqli_query($con,$sql);
?>