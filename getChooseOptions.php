<?php
    session_start();

    $category = $_POST["category"];
    $level = $_POST["level"];
    $counts = $_POST["counts"];
    $time = $_POST["time"];

    $_SESSION["category"] = $category;
    $_SESSION["level"] = $level;
    $_SESSION["counts"] = $counts;
    $_SESSION["time"] = $time;

    header("Location: quzi.php");

?>