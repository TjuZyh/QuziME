<?php
$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");
if (mysqli_select_db($con,'project') === false)
    die("Could not select database");
mysqli_query($con, "set names utf8");

if (isset($_POST["level"]) && isset($_POST["category"]) && isset($_POST["question"]) && isset($_POST["answer"]) && isset($_POST["qid"])){
    $level = $_POST["level"];
    $catego = $_POST["category"];
    $question = $_POST["question"];
    $answer = $_POST["answer"];
    $qid = $_POST["qid"];
    $sql = "UPDATE questions SET category = '{$catego}', level = '{$level}',question = '{$question}',answer = '{$answer}' WHERE qid = '{$qid}'";
    $sql_insert = mysqli_query($con,$sql);
}

?>
<script src="js/jquery-1.11.1.min.js"></script>
<script>
    $(function(){
        alert("update completed!");
        location.replace("getquestionlist.php");
    })
</script>