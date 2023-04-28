<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white bg-opacity-75 text-center py-3 ">
      <div class="container " >
        <a class="navbar-brand" href="#">
        <img src="https://cdn.worldvectorlogo.com/logos/eizo-2.svg" class="img-fluid opacity-75
        " width="120px"/>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">

          <span class="custom-navbar-toggler-icon" style="--i:-1"></span>
          <span class="custom-navbar-toggler-icon" style="--i:0"></span>
          <span class="custom-navbar-toggler-icon" style="--i:1"></span>

      </button>
      <div class="collapse navbar-collapse px-0 pt-2 pt-md-0 ps-md-5"  id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-md-0  mt- mt-lg-0 menu">
          <span id="menuHoverEffect" class="hoverEffect"></span>
          <li class="nav-item">
            <a class="nav-link active" href="/project1/index.php#hero" >
              <i class="fa fa-home"></i>
              Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project1/index.php#users">
              <i class="fa fa-user"></i>
              Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/project1/index.php#contact" >
                <i class="fa fa-envelope"></i>
                Contact</a>
              </li>
            </ul>
            <hr>
            <ul class="register-btn navbar-nav ms-auto  mb-5 mb-md-0">
              <span id="signHoverEffect" class="hoverEffect"></span>
              <li class="nav-item ">
                <a class="nav-link text-primary" href="/project1/login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/project1/signup.html" id="register">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <section class="hero d-flex align-items-center py-5 text-start " id="hero">
  <div class="container py-5">
    <div class="row py-5 gap-5 gap-md-0">
      <div class="col-12 col-md-5 gap-2 d-flex flex-column justify-content-center">
        <h2 class="text-primary border-primary fw-bolder">Welcome To Our Website</h2>
        <p class="lead text-dark text-opacity-50">We are creating unique user eXperience</p>
        <div class="row gap-2 mt-3">
          <div class="col-12 col-md">
            <button class="btn bg-primary bg-gradient  rounded rounded-3 w-100 fw-bolder py-2 text-white border border-3 border-primary">Join us</button>
          </div>
          <div class="col flex-wrap">
            <button class="btn btn-outline-light rounded rounded-3 w-100 fw-bolder py-2 text-primary border border-3">More info <i class="fa fa-arrow-right arrow-animation "></i> </button>  
          </div>
        </div>
        <p class="small text-start">You are not subscribed yet ?</p>
      </div>
      <div class="col d-none d-md-flex position-relative">
        <span id="body-bg"></span>
        <div class="col-12 col-md-10 ms-auto">
          <img src="img/undraw_fall_is_coming_yl-0-x.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="users py-5" id="users">
  <div class="container py-5">
    <h2 class="text-center mb-4 ">Search for users</h2>
    <div class="col-12 mb-2 ">
      <input type="text" name="search" id="search" class="form-control p-3" placeholder="Search for user ..." >
    </div>
    <div class="w-100">
      <table class="table table-striped table-bordered table-primary" id="txtHint">
      </table>
    </div>
  </div>
</section>
  <section class="articles py-5" id="articles">
    <div class="container py-5">
      <h2 class="text-center mb-4">test</h2>
    <div class="row row-cols-sm-2 row-cols-md-3  g-5 align">
      <div class="col">
        <div class="card border-0 shadow">
          <img src="img/pexels-photo-691668.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div> 
      <div class="col">
        <div class="card border-0 shadow">
          <img src="img/pexels-pixabay-206359.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div> 
      <div class="col">
        <div class="card border-0 shadow">
          <img src="img/pexels-james-wheeler-417074.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div> 
    </div>
</section>

  <section class="bg-primary text-light" id="contact" >

  </section>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="js/linksEffect.js"></script>
<script src="js/index.js"></script>
</body>

</html>