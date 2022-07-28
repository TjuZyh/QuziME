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
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script>
    function addcate(){
        newcateg = document.getElementById("addcategory").value;
        console.log(newcateg);
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {console.log("成功");}
        }
        xmlhttp.open("GET","addcategory.php?cname="+newcateg,true);
        xmlhttp.send();
        $("#newcateg").after("<input type=\"radio\" name=\"category\"  value=\""+newcateg+"\">"+newcateg);
    }
</script>

<?php

    $con = mysqli_connect("localhost","root","123456");
    if (!$con)
        die("Could not connect to database");
    if (mysqli_select_db($con,'project') === false)
        die("Could not select database");
    mysqli_query($con, "set names utf8");

    $categorys = "";
    $selectcate = "<option><option>";
    $sql = sprintf("SELECT * FROM categorys");
    $sql_result = mysqli_query($con,$sql);
    $n = mysqli_num_rows($sql_result);
    if ($n != 0) { 
    while($n>0){
        $rows = mysqli_fetch_array($sql_result);
        $categorys .= 
            "
                <input type=\"radio\" name=\"category\"  value=\"".$rows["cname"]."\">".$rows["cname"]."
            ";
        $selectcate .= "<option value=\"".$rows["cname"]."\">".$rows["cname"]."</option>";
        //$categorys .= "<input type=\"radio\" name=\"category\" value=\"".$rows["cname"]."\">".$rows["cname"];
        $n--;
    }
}
?>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <h1><a href="index.html">QuizMe</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html" class="scrollto">Home</a></li>
          <li><a href="login.php" class="scrollto">logIn</a></li>
          <li><a href="signUp.php" class="scrollto">Sign Up</a></li>
          <li><a href="choose.php" class="scrollto">QuziMe</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->


  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to QuizMe</h1>
      <h2>You can query question or update and delete questions!</h2>
    </div>
  </section>

  <main id="main">

    <!-- 更新question model -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update question</h4>
      </div>
      <div class="modal-body">
        <form action="updatequestion.php" method="post">

            <div class="form-group" style="display:none;">
                <label for="qidd">qid</label>
                <input name="qid" class="form-control" type="text" id="qidd">
            </div>

            <div class="form-group">
                <label for="level">Level: </label>
                <select id="level" class="form-control" name="level">
                    <option value="easy">easy</option>
                    <option value="medium">medium</option>
                    <option value="hard">hard</option>
                </select>
            </div>

            <div class="form-group">
                <label >Category:</label>    
                <div id="newcateg">
                    <?=$categorys?>
                </div>
                <input id="addcategory" name="addcategory" type="text">
                <button onclick="addcate();return false;">添加新类别</button>
            </div>
            <div class="form-group">
                <label for="questiontext">Question:</label>
                <textarea name="question" class="form-control" type="text" id="questiontext"></textarea>
            </div>
            <div class="form-group">
                <label for="answertext">Answer</label>
                <input name="answer" class="form-control" type="text" id="answertext">
            </div>
            <button type="submit"  >Submit</button>
            <button type="button" data-dismiss="modal">Close</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- model end -->


    <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>query questions</h2>
          </div>
  
          <div class="row justify-content-center">
  
  
            <div class="col-lg-8 col-md-12">
              <form action="getquestionlist.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <select id="cateselect" class="form-control" name="category">
                    <?=$selectcate?>
                  </select>
                </div>
                <div class="form-group" >
                  <select id="levelselect" class="form-control" name="level">
                    <option value="">choose level</option>
                    <option value="easy">easy</option>
                    <option value="medium">medium</option>
                    <option value="hard">hard</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="question" id="queselect"  placeholder="question Select" >
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" id="anselect" name="answer" placeholder="answer select" >
                </div>
                <div class="text-center" style="padding-top:20px"><button type="submit">Sign Up</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>

    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Here are some questions in QuziMe</h2>
        </div>

        <ul class="faq-list">
        <?php
        if(isset($_POST["level"])|| isset($_POST["question"]) || isset($_POST["answer"]) || isset($_POST["category"]) ){
            $str1 = "1=1";
            $str2 = "1=1";
            $str3 = "1=1";
            $str4 = "1=1";
            if(isset($_POST["level"])){
                $str1 = "level like '%{$_POST["level"]}%'";
            }
            if(isset($_POST["question"])){
                $str2 = "question like '%{$_POST["question"]}%'";
            }
            if(isset($_POST["answer"])){
                $str3 = "answer like '%{$_POST["answer"]}%'";
            }
            if(isset($_POST["category"])){
                $str4 = "category like '%{$_POST["category"]}%'";
            }
        
            $sql = " SELECT * FROM questions WHERE {$str1} AND {$str2} AND {$str3} AND {$str4}";
            $sql_result = mysqli_query($con,$sql);
            //$rows = mysqli_fetch_array($sql_result);
        }else{
            $sql = "SELECT * FROM questions";
            $sql_result = mysqli_query($con,$sql);
        }
        $totalnum = mysqli_num_rows($sql_result);
        if ($totalnum >0) { 
            while($rows = mysqli_fetch_array($sql_result)){
                echo "
                <li>
                  <a>".$rows["question"]."<i class=\"bx bx-down-arrow-alt icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
                  <div>
                  <p>
                    category:".$rows["category"]."level:".$rows["level"]."
                  </p>
                  <div style=\"padding-top : 10px\">
                    <button type=\"button\" class=\"btn btn-danger\"  id=\"delete".$rows["qid"]."\" style=\"border=0;background=#fd680e\">delete</button>
                    <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal\" id=\"update".$rows["qid"]."\">update</button>
                  </div>
                  </div>
                  </li>";
            }
        }else{
            echo "<h1>no info!</h1>";
        }
        ?>

        </ul>

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    //删除函数
    function Qdelete(num){
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                alert("successfully deleted!");
                location.reload();
            }
        }
        xmlhttp.open("GET","deletequestion.php?qid="+num,true);
        xmlhttp.send();
    }


    function Qupdate(num){

        $.ajax({
            type: "get",
            url: "getquestion.php?qid="+num,
            dataType: "json",
            success: function(msg){
                var data='';
                if(msg!=''){
                     data = eval("("+msg+")");    //将返回的json数据进行解析，并赋给data
                }
                $('#qidd').val(data.qid);
                $('#questiontext').val(data.level);
                $('#questiontext').val(data.category);
                $('#questiontext').val(data.question);
                $('#answertext').val(data.answer);

            },
            error:function(msg){
                console.log(msg);
            }
        });
    }

    $(function(){
        $('button').click(function(){
            var id = $(this).attr('id');
            if(id.indexOf("delete")!=-1){
                console.log("delete:"+id.slice(6));
                Qdelete(id.slice(6));
            }else if(id.indexOf("update")!=-1){
                console.log("update:"+id.slice(6));
                Qupdate(id.slice(6));
            }
        })
    })

    
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php } else{
    ?>

    <h1><a herf="login.php">请登录</a></h1>

<?php
}?>