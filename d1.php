<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
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
    font-weight: bold;
    font-size: 17px;
    margin: 15px;
    background-clip: border-box;
    background-size: 200% auto;
}
h1{
    color:black;
  margin-left: 20px;
  font-weight: bolder;
  margin-right: 20px;
    
}
h4{
    color: black;
  margin-left: 20px;
  margin-right: 20px;
}
.col-6 img{
  height: 650px;
  width:1115px

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
#ap{
  margin-left: 20px;
  margin-right: 20px;
  font-size: 17px;
}
.btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #C70039;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  font-weight:bold 
}

.btn:hover {
 background-color: black;
  color:white;
}
</style>
<nav class="navbar navbar-expand-sm" style="background-color: black;">
    <h4 class="animate-charcter"> Artistic Aura</h4>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#home">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="findmaster.html">MASTERPIECE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="exhibition.html">EVENTS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.html">LOGIN/REGISTER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin.html">ADMIN LOGIN</a>
   </li>
</ul>

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
<section id="about">
<div class="row" style="background-color:#F6FDC3;">
  <div class="col-md-6">
    <img src="back.jpeg" class="img-fluid" style="width:100%; height: 550px; margin-top:20px;margin: 20px;" >
    <a href="login.html">
    <button class="btn">GET STARTED</button>
    </a>
  </div>
  <div class="col-md-6">
  <br><br>
  <h1 style="font-style: italic;">ABOUT</h1>
  <p id="ap">
    Welcome to Artistic Aura Art Gallery, where creativity meets expression, and art finds its true home. We are more than just a gallery; we are a sanctuary for art enthusiasts, collectors, and visionaries. Our mission is to showcase the beauty, emotion, and power of artistic creations that ignite the soul.
    <br><br>
    <h4>Our Vision:</h4>
    <p id="ap">
    At Artistic Aura Art Gallery, we believe that art transcends boundaries, speaks a universal language, and can change lives. Our vision is to foster a deep appreciation for all forms of artistic expression, from traditional to contemporary, and create a space where art lovers can explore, learn, and connect with the creative souls behind the masterpieces.
    <br><br>
    </p>
  </div>
</section> 
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<br><br>
<br>
<footer>
<p>Copyright &copy; 2023 Artistic Aura. All rights reserved.</p>
</footer>
</body>
</html>