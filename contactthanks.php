<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
 <title>QuyenBui UI & UX Designer </title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html"><img src="images/logo.png" alt="Myself"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
       
       <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- page title -->
<section class="hero-area page-title bg-primary  position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">  Design for love </br> Work for money </h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->

   <picture>
      <source media="(max-width: 799px)" srcset="images/illustrations/contact_mobile.png">
      <source media="(min-width: 800px)" srcset="images/illustrations/contact.png">
      <img src="images/illustrations/contact.png" alt="illustrations" class="bg-shape-1 w-100">
    </picture>
 
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-group-orange.png" alt="illustrations" class="bg-shape-3">
   <picture>
      <source media="(max-width: 799px)" srcset="images/illustrations/leaf-yellow-mobile.png" >
      <source media="(min-width: 800px)" srcset="images/illustrations/dots-group-cyan.png">
      <img src="images/illustrations/dots-group-cyan.png" alt="illustrations"  class="bg-shape-4">
    </picture>
  
  <picture>
      <source media="(max-width: 799px)" srcset="images/illustrations/leaf-cyan-mobile.png" width="50">
      <source media="(min-width: 800px)" srcset="images/illustrations/leaf-cyan-lg.png">
      <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations"  class="bg-shape-7">
    </picture>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Your message has been sent! </h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down" id="contact-form" method="POST" action="contact.php">
          <h4 class="mb-80">Contact Form</h4>
          <form class="row">
            <div class="col-md-6">
              <input type="text"  name="name" placeholder="Full Name" class="form-control px-0 mb-4">
            </div>
            <div class="col-md-6">
              <input type="email"name="email" placeholder="Email Address" class="form-control px-0 mb-4">
            </div>
            <div class="col-12">
              <textarea name="message" class="form-control px-0 mb-4"
                placeholder="Type Message Here"></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100" type="submit">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->


<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">quyen.bui26@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+84 934 02 03 67</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">Fullhouse, 77 Street, Tan Quy, D.7</p>
        </div>
      </div>
    </div>
  </div>
  
</footer>
<!-- /footer -->


<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>