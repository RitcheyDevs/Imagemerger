
<br>
<form method="post" enctype="multipart/form-data">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $target_dir = "assets/img/circular/";
                $target_file = $target_dir . basename($_FILES["dpUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (isset($_POST["btnUpload"])) {
                        $imageFileType = strtolower($imageFileType);
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                                echo "<script>alert('Sorry, only JPG, JPEG, PNG files are allowed!');</script>";
                                $uploadOk = 0;
                        } else {
                                if ($uploadOk == 0) {
                                        echo "<script>alert('Sorry, An error Occurred, Please try again!');</script>";
                                } else {
                                        //$savename = $_SESSION['username'] . "ProfilePix";
                                        $savename = 'output';
                                        $saveas = $target_dir . $savename . "." . "png";

                                        if (move_uploaded_file($_FILES["dpUpload"]["tmp_name"], $saveas)) {
                                                //DO some action
                                                /*require_once 'database/dbConfig.php';
                                                  $updateQuery = "UPDATE users SET profile_picture='$saveas' WHERE username='" . $_SESSION['username'] . "'";
                                                  $Conn->query($updateQuery);
                                                  $_SESSION['proPix'] = $saveas;
                                                  $editTweetImg = "UPDATE tweets SET tweeter_img='$saveas' WHERE tweeter_name='" . $_SESSION['username'] . "'";
                                                  $Conn->query($editTweetImg);
                                                  //header('location:myprofile.php');
                                                  echo "<script>window.location.href = 'myprofile.php';</script>";*/

                                        } else {
                                                echo "<script>alert('Sorry, An error Occurred while uploading your file. Please try again!');</script>";
                                        }
                                }

                        }
                }
        }
        ?>
        <div class="row">
                <div class="col l4 offset-l4">
                        <center>
                                <h4>Upload Picture</h4><br><br>

                                <div class="file-field input-field">
                                        <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="dpUpload">
                                        </div>
                                        <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload File..">
                                        </div>
                                </div>
                                <br><br>
                                <button type="submit" class="btn green btn-large" name="btnUpload"><i
                                            class="material-icons right">file_upload</i> Upload
                                </button>
                        </center>
                </div>
        </div>

</form>