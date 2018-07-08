<!DOCTYPE html>
<html>
<head>
      <title>TeeSam18</title>
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
                        <li class="active"><a href="#Home">Home</a></li>
                        <li><a href="create">Create</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#developer">Developer</a></li>
                  </ul>


            </div>
      </nav>
</div>
<ul class="side-nav" id="slide-out">
      <li class="active"><a href="#Home"><i class="material-icons left">home</i>Home</a></li>
      <li><a href="create"><i class="material-icons left">touch_app</i>Create</a></li>
      <li><a href="#about"><i class="material-icons left">info</i>About</a></li>
      <li><a href="#developer"><i class="material-icons left">laptop_mac</i>Developer</a></li>
</ul>

<div class="container-fluid">
      <div class="row">
            <div class="col l7 col s12 col m10 offset-m1">
                  <center>
                        <div class='sectionHead center z-depth-1' style='width:180px;'>INSTRUCTIONS</div>
                  </center>
                  <div class="container">
                        <ul style="list-style-type: disc; font-size: 18px;" class="browser-default">
                              <li>Input your details</li>
                              <li>Upload your picture</li>
                              <li>Click 'CREATE'</li>
                              <li>And Click 'DOWNLOAD', to download your output.</li>
                              <li>You are free to use it on Whatsapp, Facebook, or Instagram</li>
                              <li>Recommended Browser: <br><b>Firefox/Chrome (Mobile / Desktop)</b></li>
                              <li>Recommended Image: Your WhatsApp DP or an image less than <b>300kb</b></li>
                        </ul>
                        <br>
                        <div class="center">
                              <a href="create" class="btn btn-large green">START<i
                                            class="material-icons right">keyboard_arrow_right</i></a>
                        </div>
                        <br><br>

                  </div>
            </div>
            <div class="col l5 col s12 col m12">
                  <center>
                        <div class='sectionHead center z-depth-1' style='width:180px;'>SAMPLE OUTPUT</div>
                        <img src="assets/img/sample_output.png" width="400px" height="400px"
                             class="responsive-img z-depth-4">
                  </center>
            </div>
      </div>
      <br><br>

      <div class="row about" id="about">
            <div class="col l4 col s12">
                  <br>
                  <img src="assets/img/teesam_head.png" class="hide-on-med-and-down circle responsive-img teesam-head"
                       width="200" height="200">
                  <img src="assets/img/teesam_head.png" class="hide-on-large-only circle responsive-img" width="200"
                       height="200">
            </div>

            <div class="col l8 col s12">
                  <br>
                  <h5>About TeeSam</h5>
                  <p class="about-text"><b>BEJIDE TEMITOPE SAMUEL</b> is a <b>MATHEMATICAL SCIENCE</b> student, vying
                        for the position of <b>Public Relations Officer</b> Under the Umbrella of FEDERAL UNIVERSITY OF
                        TECHNOLOGY, AKURE, STUDENTS UNION GOVERNMENT.<br>
                        TeeSam is very qualified to exercise the duty due to his immense knowledge to use the social
                        media and every other message/information channel appropriately to get latest updates to a door
                        step near all students and not just well but excellently.<br>
                        <b>Every body can disseminate information but not all persons can disseminate right
                              information</b>
                        <br>
                        <br>
                        God Bless FUTA.<br>
                        God Bless Nigeria Students.<br>
                        God Bless Nigeria<br>

                        <b>AMALA AWETU</b></p>
            </div>
      </div>

      <div class="row about-dev" id="developer">
            <div class="col l4 col s12">
                  <br>
                  <img src="assets/img/ritchey.jpg" class="hide-on-med-and-down circle responsive-img teesam-head"
                       width="200" height="200">
                  <img src="assets/img/ritchey.jpg" class="hide-on-large-only right circle responsive-img" width="200"
                       height="150">
            </div>

            <div class="col l8 col s12">
                  <br>
                  <h5>Contact Developer</h5>
                  <p class="about-text"><b>OLUSEYE RICHARD</b><br>
                        <b>Mathematical Science</b><br><br>
                        <i class="fa fa-facebook-square fa-2x"></i><a href="http://facebook.com/Richard.Omogbolahan">&nbsp;&nbsp;Oluseye Richard</a><br>
                        <i class="fa fa-google-plus-square fa-2x"></i><a href="mailto:oluseyer@gmail.com">&nbsp;&nbsp;Oluseyer@gmail.com</a><br>
                        <i class="fa fa-whatsapp fa-2x"></i><a href="https://api.whatsapp.com/send?phone=2348179491869">&nbsp;&nbsp;08179491869</a><br>
                  </p><br>
            </div>
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
