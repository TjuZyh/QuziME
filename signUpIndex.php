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
        <h1><a href="login.php">QuizMe</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="login.php" class="scrollto">Home</a></li>
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
      <h2>You can start your answer journey here!</h2>
      <h2>You can sign up system below!</h2>
    </div>
  </section>

  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Sign Up</h2>
        </div>

        <div class="row justify-content-center">


          <div class="col-lg-8 col-md-12">
            <form action="signUp.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control"  placeholder="Your Name(4 ~ 10 characters)" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="password1"  placeholder="Your password" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="password2" placeholder="repeat password" required>
              </div>
              <div class="text-center" style="padding-top:20px"><button type="submit">Sign Up</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>