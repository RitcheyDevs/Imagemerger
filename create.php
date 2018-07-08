<?php
session_start();
require 'ImageMerger.php';
//require_once 'database/dbConfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = trim($_POST['firstName']);
        $lastname = trim($_POST['lastName']);
        $whatsapp = $_POST['whatsapp'];
        $_SESSION ['id'] = strtolower($firstname) . strtolower($lastname);
        $target_dir = "assets/img/circular/";
        $target_file = $target_dir . basename($_FILES["dpUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (isset($_POST["btnCreate"])) {
                $imageFileType = strtolower($imageFileType);
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                        echo "<script>alert('Sorry, only JPG, JPEG, PNG files are allowed!');</script>";
                        $uploadOk = 0;
                } else {
                        if ($_FILES["dpUpload"]["size"] > 1000000) {
                                echo "<script>alert('Sorry, your file is too large. Please, choose an image less than 1mb!');</script>";
                                $uploadOk = 0;
                        } else {

                                if ($uploadOk == 0) {
                                        echo "<script>alert('Sorry, An error Occurred, Please try again!');</script>";
                                } else {
                                        if (!isset($_SESSION['id'])) {
                                                echo "<script>alert('Sorry, An error Occurred, Please try again!'); window.location.href = 'index'</script>";
                                        }
                                        // Save image and create a cookie for the location;
                                        $savename = $_SESSION['id'] . "dp";
                                        $saveas = $target_dir . $savename . "." . "png";
                                        $_SESSION['dp_dir'] = $saveas;

                                        if (move_uploaded_file($_FILES["dpUpload"]["tmp_name"], $saveas)) {
                                                //DO some action

                                                //Database....
                                                //$sql = "INSERT INTO tbl_reg VALUES (null, '" . $firstname . "', '" . $lastname . "', '" . $whatsapp . "', '" . $saveas . "', null)";
                                                //if ($conn->query($sql)) {
                                                //echo "<script>alert('Success')</script>";

                                                //Do the main thing!
                                                $imageMerger = new ImageMerger();
                                                $imageMerger->makeImageCircular();
                                                $imageMerger->mergeImage();
                                                $imageMerger->createText($firstname, $lastname);
                                                $imageMerger->mergeAll();
                                                header('location: download');

                                                /*} else {
                                                        echo "<script>alert('An Error Occured')</script>";
                                                }*/
                                        } else {
                                                echo "<script>alert('Sorry, An error Occurred while uploading your file. Please try again!');</script>";
                                        }
                                }
                        }

                }
        }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
                  <a href="#" class="brand-logo center" style="margin-top: 10px;"><img src="assets/img/logo.png"
                                                                                       width="200" height="30"></a>
                  <a class='button-collapse hide-on-large-only' data-activates='slide-out' href=''><i
                                class='material-icons' style='font-size:30px;'>menu</i></a>


                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index">Home</a></li>
                        <li class="active"><a href="create">Create</a></li>
                        <li><a href="index#about">About</a></li>
                        <li><a href="index#developer">Developer</a></li>
                  </ul>


            </div>
      </nav>
</div>
<ul class="side-nav" id="slide-out">
      <li><a href="index"><i class="material-icons left">home</i>Home</a></li>
      <li class="active"><a href="create"><i class="material-icons left">touch_app</i>Create</a></li>
      <li><a href="index#about"><i class="material-icons left">info</i>About</a></li>
      <li><a href="index#developer"><i class="material-icons left">laptop_mac</i>Developer</a></li>
</ul>

<div class="container-fluid">
      <br>
      <div class="row">
            <div class="col l4 offset-l4 col m6 offset-m3 col s10 offset-s1">
                  <center>
                        <div class='sectionHead center z-depth-1' style='width:180px;'>QUICK NOTICE</div>
                  </center>
                  <ul style="list-style-type: disc; font-size: 18px;" class="browser-default">
                        <li>Some users have been complaining of not being able to upload</li>
                        <li>Especially on chrome, this is due to the phones having less than 2gb RAM</li>
                        <li>If you are getting this error: <b>Unable to complete previous task...</b></li>
                        <li>Please select a <b>very low sized image</b>, Thank You :)</li>
                  </ul>
                  <br>
                  <form method="post" enctype="multipart/form-data">
                        <div class="input-field">
                              <input type="text" maxlength="10" name="firstName" placeholder="Max of 10 characters"
                                     class="validate" required>
                              <label>Firstname</label>
                        </div>

                        <div class="input-field">
                              <input type="text" maxlength="10" name="lastName" placeholder="Max of 10 characters"
                                     class="validate" required>
                              <label>Lastname</label>
                        </div>

                        <div class="input-field">
                              <input type="number" class="validate" name="whatsapp" required>
                              <label>Whatsapp No.</label>
                        </div>

                        <p>We personally recommend a picture less than 500kb</p>

                        <div class="file-field input-field">
                              <div class="btn" style="background-color: #4d4d4d;">
                                    <span>File</span>
                                    <input type="file" name="dpUpload" required>
                              </div>
                              <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                           placeholder="Upload Display Picture..">
                              </div>
                        </div>

                        <br>
                        <div class="center">
                              <button type="submit" name="btnCreate" class="btn btn-large amber darken-1"
                                      style="letter-spacing: 2px;"><b>Create</b></button>
                        </div>
                  </form>
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
