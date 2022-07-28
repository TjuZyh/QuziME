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
      <h2>You can visite your answer record!</h2>
      <?php
      echo "<h2>Hello ".$_SESSION["user"]."</h2>"
      ?>
    </div>
  </section>

  <main id="main">



    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Here is your answer record</h2>
        </div>

        <ul class="faq-list">
        <?php
            $uid = $_SESSION["uid"];
            $sql = "select * FROM records, questions where records.qid = questions.qid and uid = '$uid' ";
            
            $sql_result = mysqli_query($con,$sql);
            if(!$sql_result){
                echo mysqli_error($con);
              }
        $totalnum = mysqli_num_rows($sql_result);
        if ($totalnum >0) { 
            while($rows = mysqli_fetch_array($sql_result)){
                echo "
                <li>
                  <a>".$rows["question"]."<i class=\"bx bx-down-arrow-alt icon-show\"></i><i class=\"bx bx-x icon-close\"></i></a>
                  <div>
                  <p>
                    <span style=\"padding-right:10px\">category:".$rows["category"]."</span>
                  </p>
                  <p>
                    <span style=\"padding-right:10px\">category:".$rows["level"]."</span>
                  </p>
                  <p>
                    <span style=\"padding-right:10px\">correct:".$rows["iscorrect"]."</span>
                  </p>
                  <p>
                    <span style=\"padding-right:10px\">my answer:".$rows["myanswer"]."</span>
                  </p>
                  <p>
                    <span style=\"padding-right:10px\">answer time:".$rows["time"]."</span>
                  </p>
                  
                  </div>
                  </li>";
            }
        }else{
            echo "<h1>you haven't any record! You can visite QuziMe page!</h1>";
        }
        ?>

        </ul>

      </div>
    </section><!-- End Frequenty Asked Questions Section -->

    

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