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

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <h1><a href="index.html">QuizMe</a></h1>
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


  <section id="hero" style="height: 2000;">
   <!--  <div class="hero-container">
      <h1>Welcome to QuizMe</h1>
      <h2>You can start your answer journey here!</h2>
      <h2>You can log in or sign in system!</h2>
    </div> -->
    <div class="container">

      <div class="section-title" style="padding-top: 20px;">
        <h2>Question options</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <h2>you can DIY your question</h2>
          <form action="quzi.php" method="post" role="form" class="php-email-form">
            
            <div>
              <select class="form-control" name="category">
                <option>choose category</option>
                <option>geography</option>
                <option>sport</option>
                <option>science</option>
                <option>general</option>
              </select>
            </div>

            <div style="padding-top: 15px;">
              <select class="form-control" name="level">
                <option>choose level</option>
                <option>easy</option>
                <option>medium</option>
                <option>hard</option>
                <option>random</option>
              </select>
            </div>

            <div style="padding-top: 15px;">
              <select class="form-control" name="counts">
                <option>choose question counts</option>
                <option>5</option>
                <option>10</option>
                <option>15</option>
              </select>
            </div>

            <div style="padding-top: 15px;">
              <select class="form-control" name="time">
                <option value="0">choose count down per question</option>
                <option value="0">no count down</option>
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
              </select>
            </div>
            
            <div class="text-center"><button type="submit">start Quzi</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  

  <main id="main">
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/why-us-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Here are some rules in our system:</h3>
            <ul>
              <li><i class="bx bx-check-double"></i> Users don't log in can answer questions, but can not add questions or view quiz records. </li>
              <li><i class="bx bx-check-double"></i> when you start you answering, you need to choose catecory level and length</li>
              <li><i class="bx bx-check-double"></i> if you login, after you answer, you answer record will be saved in our system, and you can visit it</li>
            </ul>
            <p>
              have a good time!
            </p>
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>