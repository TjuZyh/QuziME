<?php
session_start();
$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");
if (mysqli_select_db($con,'project') === false)
    die("Could not select database");
mysqli_query($con, "set names utf8");


    $qid = $_GET["qid"];
    $iscorrect = $_GET["iscorrect"];
    $myanswer = $_GET["myanswer"];
    $time = date("Y-m-d H:i:s");
    $sql = "INSERT INTO records  (`qid`,`uid`,`myanswer`,`iscorrect`,`time`) VALUES ('{$qid}','{$_SESSION["uid"]}','{$myanswer}','{$iscorrect}','{$time}')";
    $sql_insert = mysqli_query($con,$sql);


?>
<script src="js/jquery-1.11.1.min.js"></script>
<script>
    $(function(){
        alert("update completed!");
        location.replace("getquestionlist.php");
    })
</script>