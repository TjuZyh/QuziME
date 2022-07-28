<?php 
session_start();
if(isset($_SESSION["user"])){

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QuizMe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <script src="js/jquery-1.11.1.min.js"></script>

<?php

//连接数据库 地址 用户名 密码
$con = mysqli_connect("localhost","root","123456");
if (!$con)
    die("Could not connect to database");
if (mysqli_select_db($con,'project') === false)
    die("Could not select database");
mysqli_query($con, "set names utf8");

//编辑sql语句
if (isset($_POST["level"]) && isset($_POST["category"]) && isset($_POST["question"]) && isset($_POST["answer"])){
    
    echo "<script>$(function(){
      alert(\"Submit Success!\");
    })</script>";$level = $_POST["level"];
    $catego = $_POST["category"];
    $question = $_POST["question"];
    $answer = $_POST["answer"];

    $sql = "INSERT INTO questions (category,level,question,answer) VALUES (\"{$catego}\", \"{$level}\", \"{$question}\", \"{$answer}\" )";

    $sql_insert = mysqli_query($con,$sql);
    
  
}

//循环渲染
$categorys = "";
  $sql = sprintf("SELECT * FROM categorys");
  $sql_result = mysqli_query($con,$sql);
  $n = mysqli_num_rows($sql_result);
  if ($n != 0) { 
    while($n>0){
        $rows = mysqli_fetch_array($sql_result);
        $categorys .= "<input type=\"radio\" name=\"category\" value=\"".$rows["cname"]."\">"."<span  class=\" \" style=\"padding-left:8px;padding-right:8px;\">".$rows["cname"]."</span>";
        $n--;
    }
  }
  
?>

<script>
//添加新类别到数据库并显示在页面上
function addcate() {

    newcateg = document.getElementById("addcategory").value;
    console.log(newcateg);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert("category added!");
        }
    }
    xmlhttp.open("GET", "addcategory.php?cname=" + newcateg, true);
    xmlhttp.send();
    $("#newcateg").after("<input type=\"radio\" name=\"category\" value=\"" + newcateg + "\">" + newcateg);
}

function submitsuccess(){
}
</script>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <h1><a href="index.html">QuizMe</a></h1>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html" class="scrollto">Home</a></li>
          <li><a href="login.html" class="scrollto">logIn</a></li>
          <li><a href="signUp.html" class="scrollto">Sign Up</a></li>
          <li><a href="choose.html" class="scrollto">QuziMe</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to QuizMe</h1>
      <h2>You can add new questions here!</h2>
    </div>
  </section>

  <main id="main">

    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>add question</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-8 col-md-12">

            <form action="<?php print($_SERVER["PHP_SELF"]) ?>" method="post" role="form" class="php-email-form">
              <div >
                <select name="level" id="formlevel" class="form-control">
                  <option value="easy">easy</option>
                  <option value="medium">medium</option>
                  <option value="hard">hard</option>
              </select>
              </div>
              <div>
                <div id="newcateg" style="padding-top:20px"><?=$categorys?></div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="addcategory" id="addcategory"  placeholder="new catecory">
                <div style="padding-top:20px">
                 <button onclick="addcate();return false;" type="submit">add category</button>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="question" placeholder="question content" id="textareaq" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="answer" placeholder="answer" required>
              </div>
              <div class="text-center" style="padding-top:20px"><button onclick="submitsuccess()" type="submit">add question</button></div>
            </form>
          </div>


        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tianjin University</span></strong>. QuziMe2022
      </div>
      
    </div>
  </footer><!-- End #footer -->


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php } else{
    ?>

    <h1><a herf="login.php">请登录</a></h1>

<?php
}?>