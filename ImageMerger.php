<?php
require_once 'database/dbConfig.php';

Class ImageMerger
{

        function makeImageCircular()
        {
                /*
                 * Creates a circular image and outputs
                 * a png image with a transparent background
                 */

                // Image Location
                $filename = $_SESSION['dp_dir'];

                //Create Image Graphically
                $image_s = imagecreatefromstring(file_get_contents($filename));

                //Get width and height of the Image Created
                $width = imagesx($image_s);
                $height = imagesy($image_s);

                //The actual size you want your circular Image output to be...
                //This will be determined by the size of the container you are
                //placing the output.
                $newwidth = 551;
                $newheight = 551;

                //Make the Image circular, with the new width & height
                $image = imagecreatetruecolor($newwidth, $newheight);
                imagealphablending($image, true);
                imagecopyresampled($image, $image_s, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                //Create Masking
                $mask = imagecreatetruecolor($newwidth, $newheight);

                $transparent = imagecolorallocate($mask, 255, 0, 0);
                imagecolortransparent($mask, $transparent);

                imagefilledellipse($mask, $newwidth / 2, $newheight / 2, $newwidth, $newheight, $transparent);

                $red = imagecolorallocate($mask, 0, 0, 0);
                imagecopymerge($image, $mask, 0, 0, 0, 0, $newwidth, $newheight, 100);
                imagecolortransparent($image, $red);
                imagefill($image, 0, 0, $red);

                //Output
                //Uncomment this section if you want your result to be displayed in the page
                //header('Content-type: image/png');
                //imagepng($image);
                //Saves in the specified directory, It replaces the uploaded image with a circular one.
                imagepng($image, $filename);

                //Destroy all the shit.
                imagedestroy($image);
                imagedestroy($mask);

        }


        function mergeImage()
        {
                /*
                 * merges the two images
                 */
                // The template design
                $image1 = 'assets/img/teesam18.png';

                // The circular Image
                $image2 = $_SESSION['dp_dir'];

                //Default circle Size is 551px (I don't know why I wrote dis 1 sef)
                //Get Image size
                list($width, $height) = getimagesize($image2);
                //Create Image Graphically
                $image1 = imagecreatefromstring(file_get_contents($image1));
                $image2 = imagecreatefromstring(file_get_contents($image2));

                //Merge the fucking Images
                // Edit the values to change the x & y coordinate and d size of d circular image on d template.
                imagecopymerge($image1, $image2, 2, 2, 0, 0, 551, 551, 100);

                //Uncomment if you want too....
                //header('Content-Type: image/png');
                //imagepng($image1);

                //Saves the merged image to another directory, without replacing the circular Image.
                imagepng($image1, "assets/img/output_picture/" . $_SESSION['id'] . ".png");

                //Destroy the shit. (I dunno why we are destroying sef :-) )
                imagedestroy($image1);

        }

        // If you are not adding a text in d image, you don't need dis...

        function createText($firstname, $lastname)
        {
                /*
                 * Creates a png image from a string with a transparent background
                 */

                $firstname = strtolower($firstname);
                $firstname = ucfirst($firstname);

                $lastname = strtolower($lastname);
                $lastname = ucfirst($lastname);


                // Create the imaginary/empty image
                $im = imagecreatetruecolor(500, 300);

                // Create some colors
                $white = imagecolorallocate($im, 255, 255, 255);
                $grey = imagecolorallocate($im, 128, 128, 128);
                $black = imagecolorallocate($im, 0, 0, 0);

                //Create a Transparent Background
                $transparent = imagecolorallocate($im, 255, 255, 255);
                imagecolortransparent($im, $transparent);
                imagefilledrectangle($im, 0, 0, 500, 300, $transparent);

                // The text to draw to image (dunno why \n isn't working for new line,
                // But it performs the function of new line leaving it dis.
                // Don't let ur  ide auto arrange it for u...
                $text = $firstname . '
' . $lastname;

                // Replace path by your own font path
                $font = 'assets/font/Berlin.TTF';


                // Add the text to d image
                // Edit the values to change the x & y coordinate.
                imagettftext($im, 53, 0, 10, 60, $black, $font, $text);

                // Using imagepng() results in clearer text compared with imagejpeg()
                // Save it to another directory too.
                imagepng($im, "assets/img/text_img/" . $_SESSION['id'] . ".png");

                //Destroy d shit
                imagedestroy($im);

        }


        function mergeAll()
        {
                /*
                 * Merges the created text image to the formal output from 'mergeImage function'...
                 */

                $image1 = "assets/img/output_picture/" . $_SESSION['id'] . ".png";
                $image2 = "assets/img/text_img/" . $_SESSION['id'] . ".png";

                list($width, $height) = getimagesize($image2);
                $image1 = imagecreatefromstring(file_get_contents($image1));
                $image2 = imagecreatefromstring(file_get_contents($image2));

                imagecopymerge($image1, $image2, 600, 300, 0, 0, 500, 300, 100);
                //header('Content-Type: image/png');
                //imagepng($image1);
                imagepng($image1, "assets/img/final_image/" . $_SESSION['id'] . ".png");
                imagedestroy($image1);
        }
}