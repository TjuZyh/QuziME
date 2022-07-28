<?php
session_start();

$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");
if (mysqli_select_db($con,'project') === false)
    die("Could not select database");

if(isset($_GET["qid"])){
    $qid = $_GET["qid"];
    $sql = " SELECT * FROM questions WHERE qid = {$qid} ";
    $sql_result = mysqli_query($con,$sql);
    $rows = mysqli_fetch_array($sql_result);
    $data='{qid:"'.$rows["qid"].'",level:"' . $rows["level"] . '",category:"' . $rows["category"] .'",question:"'.$rows["question"].'",answer:"'.$rows["answer"].'"}';//组合成json格式数据
    echo json_encode($data);
}
?>