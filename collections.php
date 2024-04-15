<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME COLLECTIONS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
* {
    font-family: 'Playfair Display', serif;
    font-family: 'Sometype Mono', monospace;
  }
.animate-charcter
{
  background-image: linear-gradient(
    -225deg,
    #A0E9FF 0%,
    #BEADFA 29%,
    #ff1361 67%,
    #fff800 100%
  );
  margin: 20px;
  background-clip: border-box;
  background-size: 200% auto;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  font-family: 'NewYork PERSONAL USE';
  font-size: 50px;
}
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
a{
    color: white;
    display: inline-block;
    font-family: 'Playfair Display', serif;
    font-family: 'Sometype Mono', monospace;
    font-weight: bold ;
    font-size: 17px;
    margin: 15px;
    background-clip: border-box;
    background-size: 200% auto;
}
h1{
    color:#461959;
}
h4{
    color: #A2678A;
}
a:hover{
    color: #5331ce;
}
@font-face {
    font-family: 'NewYork PERSONAL USE';
    font-style: normal;
    font-weight: normal;
    src: local('NewYork PERSONAL USE'), url('NewYork PERSONAL USE.woff') format('woff');
}
  footer {
    background-color: #000;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  .carousel-image {
  width:1400px;
  height: 500px;
  }
.nav-item img {
  width: 70px;
  height: 70px;
  border-radius: 30%;
  margin-left:200px;
}
.dropdown-menu a:hover{
  width: 150px;
  color:grey;
} 
.dropdown-menu a{
  color: #000;
  text-decoration: none;
  font-weight: bold;
}
</style>
<nav class="navbar navbar-expand-sm" style="background-color: black;">
    <h4 class="animate-charcter"> Artistic Aura</h4>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="d1.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="findmaster.html">FIND MASTERPIECE</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COLLECTIONS
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="reli.html">Religious</a>
          <a class="dropdown-item" href="antique.html">Antique</a>
          <a class="dropdown-item" href="modern.html">Modern Art</a>
          <a class="dropdown-item" href="portraits.html">Portraits</a>
          <a class="dropdown-item" href="cities.html">Cities</a>
      </div>
  </li>
  
  <div class="dropdown">
  <li class="nav-item dropdown">
    <img src="user.png"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
    if(isset($_COOKIE['em'])){
      echo '<div style="color: white; text-align: right;">' . $_COOKIE['em'] . '</div>';
    }
  ?>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 150px;">
        <a class="dropdown-item" href=".html">My Profile</a>
        <a class="dropdown-item" href="login.html">LogOut</a>
    </div>
</li> 
  </div>
  </nav>
<section class="home_section" id="home">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="melody-of-the-night_5.jpg" alt="Dreamy Walk" class="carousel-image">
    </div>
    <div class="carousel-item">
      <img src="52Landscape60__68985.jpg" alt="Night Sky" class="carousel-image">
    </div>
    <div class="carousel-item">
      <img src="david-clode-Ysmu6i5bfIc-unsplash.jpg" alt="Greece" class="carousel-image">
    </div>    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<br><br>
<br>
<footer>
<p>Copyright &copy; 2023 Artistic Aura. All rights reserved.</p>
</footer>
</body>
</html>