<?php
session_start();
if (!isset($_SESSION['id'])){
      echo "<script>alert('Please Register First!'); window.location.href = 'index';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Cambay' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
      <link type="text/css" rel="stylesheet" href="assets/MaterializeCss/css/materialize.min.css"
            media="screen,projection"/>
      <link rel="stylesheet" href="assets/font/font-awesome-4.7.0/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/style/custom.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="theme-color" content="#009900">
</head>

<body>
<div class="navbar-fixed">
      <nav class="green">
            <div class="nav-wrapper">
                  <a href="#" class="brand-logo center" style="margin-top: 10px;"><img src="assets/img/logo.png" width="200" height="30"></a>
                  <a class='button-collapse hide-on-large-only' data-activates='slide-out' href=''><i
                                class='material-icons' style='font-size:30px;'>menu</i></a>


                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index">Home</a></li>
                        <li><a href="create">Create</a></li>
                        <li><a href="index#about">About</a></li>
                        <li><a href="#developer">Developer</a></li>
                  </ul>
            </div>
      </nav>
</div>
<ul class="side-nav" id="slide-out">
      <li><a href="index"><i class="material-icons left">home</i>Home</a></li>
      <li><a href="create"><i class="material-icons left">touch_app</i>Create</a></li>
      <li><a href="index#about"><i class="material-icons left">info</i>About</a></li>
      <li><a href="#developer"><i class="material-icons left">laptop_mac</i>Developer</a></li>
</ul>

<div class="container" style="font-family: Cambay; margin-bottom: 50px">
      <br>
      <div class="center">
            <h4>Thank You for Supporting TEESAM!</h4><br>
            <h5>Preview:</h5>
            <img src="assets/img/final_image/<?php echo $_SESSION['id'] . '.png' ?>" width="500" height="500"
                 alt="Preview" class="responsive-img z-depth-4"><br><br>
            <a href="assets/img/final_image/<?php echo $_SESSION['id'] . '.png' ?>" download class="btn btn-large green">Download Image <i class="material-icons right">file_download</i>
            </a><br><br><br>
            <a href="index" style="font-family: ABeeZee; font-size: 22px" class="btn black"><i class="material-icons left">keyboard_arrow_left</i>Home</a>
      </div>
</div>

<div class="row about-dev" id="developer" style="background-color: #333333; color: #ffffff;">
      <div class="col l4 col s12">
            <br>
            <img src="assets/img/ritchey.jpg" class="hide-on-med-and-down circle responsive-img teesam-head"
                 width="200" height="200">
            <img src="assets/img/ritchey.jpg" class="hide-on-large-only circle responsive-img" width="150"
                 height="150">
      </div>

      <div class="col l8 col s12">
            <br>
            <h5>Contact Developer</h5>
            <p class="about-text"><b>OLUSEYE RICHARD</b><br>
                  <b>Mathematical Science</b><br><br>
                  <i class="fa fa-facebook-square fa-2x"></i><a href="http://facebook.com/Richard.Omogbolahan">&nbsp;&nbsp;Oluseye
                        Richard</a><br>
                  <i class="fa fa-google-plus-square fa-2x"></i><a href="mailto:oluseyer@gmail.com">&nbsp;&nbsp;Oluseyer@gmail.com</a><br>
                  <i class="fa fa-whatsapp fa-2x"></i><a href="https://api.whatsapp.com/send?phone=2348179491869">&nbsp;&nbsp;08179491869</a><br>
            </p><br>
      </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/MaterializeCss/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    })
</script>
</body>
</html>
