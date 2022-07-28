<?php
    session_start();

    $category = $_POST["category"];
    $level = $_POST["level"];
    $counts = $_POST["counts"];
    $time = $_POST["time"];

    if($_POST["time"]){

      
    }

    // $category = $_SESSION["category"];
    // $level = $_SESSION["level"];
    // $counts = $_SESSION["counts"];
    // $time = $_SESSION["time"];

    // echo $category;
    // echo $level;
    // echo $counts;
    // echo $time;
  

    $con = mysqli_connect("localhost","root","123456");
    if (!$con)
        die("Could not connect to database");
    if (mysqli_select_db($con,'project') === false)
        die("Could not select database");
    
    $selectCate = "category";
    $selectLeve = "level";

?>

<script>
var ansarray = new Array();
</script>
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    #hero2 {
        width: 100%;
        height: 100%;
        background-image: url("assets/img/hero-bg.jpg");
        background-size: cover;
        position: relative;
        margin-top: -80px;
        z-index: 9;
        color: white;
    }

    #check {
        height: 30px;
        width: 100px;
        font-family: $font-primary;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 30px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px;
        border: none;
        color: #fff;
        background: $primary;
    }
    </style>

</head>

<body>

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
                    <li><a href="getMyRecord.php" class="scrollto">My Record</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End #header -->

    <section id="hero2" style="height: 3000;">
        <!--  <div class="hero-container">
      <h1>Welcome to QuizMe</h1>
      <h2>You can start your answer journey here!</h2>
      <h2>You can log in or sign in system!</h2>
    </div> -->
        <div class="container">

            <div class="section-title" style="padding-top: 40px;">
                <h2 id="score">Question</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
                    <?php
            if(strcmp($level,"random") == 0){
              $sql = "SELECT * FROM questions WHERE $selectCate = '$category' ORDER BY rand() LIMIT $counts";
            }else{
              $sql = "SELECT * FROM questions WHERE $selectCate = '$category' AND $selectLeve = '$level' ORDER BY rand() LIMIT $counts";
            }
            
            $sql_result = mysqli_query($con,$sql);
            if(!$sql_result){
              echo mysqli_error($con);
            }
            $totalnum = mysqli_num_rows($sql_result);
                if ($totalnum == ($counts)) {
                  echo "<script> ansarray=new Array();</script>" ;
                  $num = 0;
                    while($rows = mysqli_fetch_array($sql_result)){
                        echo "
                        <div  id=\"".$num."\" style=\"display:none\">
                        <h1>".$rows["question"]."</h1>
                        <h2>".$rows["level"]."</h2>
                        <div class=\"form-group\" style=\"padding-top:20px;padding-bottom:20px\">
                          <input id=\"".$rows["qid"]."\" type=\"text\" class=\"form-control  ".$num."\" placeholder=\"Your answer\" required style=\"width: 500px;\">
                        </div>
                        <text style=\"display:none\"> Time left: * seconds</text>
                        <button onclick=\"nextone()\" >nextone</button>
                        </div>
                        <script> ansarray.push(\"".$rows["answer"]."\")</script> 

                        ";
                        $num++;
                    }
                }else{
                  echo "<a href=\"choose.php\">sorry! database don't hava enough question!</a>";
              }
          ?>
                    <!-- <div class="text-center" style="padding-top: 20px"><button type="button\" class="btn btn-success">check it!</button></div> -->
                    <!-- </form> -->
                </div>

            </div>

        </div>
    </section>


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
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

<script src="js/jquery-1.11.1.min.js"></script>
<script>
var num = 0;
var score = 0;
document.getElementById(num).style.display = "block";


var t = <?=$_POST["time"]?>;
if (t != 0) {
    document.getElementById(num).getElementsByTagName("button")[0].style.display = "none";
    var timName = document.getElementById(num).getElementsByTagName("text")[0];
    timName.style.display = "block";
    var timer = setInterval(function() {
        timName.innerHTML = "Time left: " + t + " seconds";
        t--;
        if (t < 0) {
            clearInterval(timer);
            nextone();
            timName.style.display = "none";
        }
    }, 1000)
}
//num++;



var myans = null;
var qid = null;
var isc = null;

function nextone() {
    console.log(num);
    if (num < <?=$counts?>) {
        num++;
        t = <?=$_POST["time"]?>;
        if (t != 0) {
            if (num != <?=$counts?>) {
                document.getElementById(num).getElementsByTagName("button")[0].style.display = "none";
                var timName = document.getElementById(num).getElementsByTagName("text")[0];
                timName.style.display = "block";
                var timer = setInterval(function() {
                    timName.innerHTML = "Time left: " + t + " seconds";
                    t--;
                    if (t < 0) {
                        clearInterval(timer);
                        nextone();
                        timName.style.display = "none";
                    }
                }, 1000)
            }

        }


        if (num != <?=$counts?>) {
            document.getElementById(num).style.display = "block";
        }
        qid = document.getElementById(num - 1).getElementsByTagName("input")[0].getAttribute("id");
        console.log(qid)
        document.getElementById(num - 1).style.display = "none";
        myans = document.getElementById(num - 1).getElementsByTagName("input")[0].value;
        isc = myans.toUpperCase().trim() == ansarray[num - 1].toUpperCase().trim();
        score += (myans.toUpperCase().trim() == ansarray[num - 1].toUpperCase().trim());

        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                console.log("submit!")
            }
        }
        xmlhttp.open("GET", "addans.php?qid=" + qid + "&iscorrect=" + isc + "&myanswer=" + myans, true);
        xmlhttp.send();

    }
    if (num == <?=$counts?>) {
        for (let index = 0; index < <?=$counts?>; index++) {
            document.getElementById(index).style.display = "block";
            document.getElementById(index).getElementsByTagName("button")[0].style.display = "none";
            document.getElementById(index).getElementsByTagName("input")[0].setAttribute("disabled", "disabled");
        }
        document.getElementById("score").after("Transcript:" + score + "/<?=$counts?>");
        // xmlhttp = new XMLHttpRequest();
        // xmlhttp.onreadystatechange = function() {
        //     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //         console.log("submit!")
        //     }
        // }
        // xmlhttp.open("GET", "addans.php?qid=" + qid + "&iscorrect=" + isc + "&myanswer=" + myans, true);
        // xmlhttp.send();
    }





}
</script>

</html>