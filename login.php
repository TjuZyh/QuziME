
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
      <h2>You can log in system!</h2>
      <h2>If you want to become a member of us, You can sign up at the bottom of the page</h2>

      <form action="signin.php" method="post" role="form" class="php-email-form">
        <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
          </div>
        </div>

      
        <div class="text-center"><button type="submit">logIn</button></div>
      </form>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
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
              <li><i class="bx bx-check-double"></i> when you start you answering, you need to choose category level and length</li>
              <li><i class="bx bx-check-double"></i> if you login, after you answer, you answer record will be saved in our systme, and you can visit it</li>
            </ul>
            <p>
              have a good time!
            </p>
            <div><a href="choose.php" style="text-decoration: none">Quiz Now</a></div>
          </div>
        </div>

      </div>
    </section>


    <!-- ======= Frequenty Asked Questions Section ======= -->
    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Here are some questions in QuziMe</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Which is the largest desert on earth?<i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                category:geography  level:medium
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">What in computer language do the initials ISDN stand for?<i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                category:science  level:medium
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Which was the first British football club to win the European Cup? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                category:sport  level:hard
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Which fictional character was also known as Lord Greystoke? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                category:general  level:easy
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequenty Asked Questions Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>