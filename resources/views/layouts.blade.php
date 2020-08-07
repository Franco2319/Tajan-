<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800;900&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
          <img src="/images/logo.png" alt="">
        </a>
    <button class="navbar-toggler border-light colorbutton" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
    <div class="collapse navbar-collapse desplegable" id="navbarResponsive">
      <ul class="navbar-nav ml-auto navegacion">
        <li class="nav-item">
          <a class="nav-link" href="/">HOME
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <div class="desplegablebordefuerte"></div>
        <li class="nav-item dropdown desplegablecolor">
      <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        TAJANÁ ESCUELAS
      </a>
      <div class="desplegablebordesuave"></div>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">LINK 1</a>
         <div class="desplegablebordesuave"></div>
        <a class="dropdown-item" href="#">LINK 2</a>
         <div class="desplegablebordesuave"></div>
        <a class="dropdown-item" href="#">LINK 3</a>
         <div class="desplegablebordesuave"></div>
        <a class="dropdown-item" href="#">LINK 4</a>
      </div>
    </li>
         <div class="desplegablebordefuerte"></div>
        <li class="nav-item">
          <a class="nav-link" href="/agencia">AGENCIA JUDÍA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



    @yield('content')
   
    <footer class="row">
       <div class="col-12 text-center footer">
         <img src="/images/footer.png" alt="" width="40%">
       </div>
    </footer>

   <script src="https://kit.fontawesome.com/3bb05eda85.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>