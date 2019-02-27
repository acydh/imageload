<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $directoryInUse = explode('/', $_SERVER['PHP_SELF'])[1];
      $imagePath = "i/" . $_GET["img"];
      $directLink = "http://". $_SERVER['SERVER_NAME'] . "/" . $directoryInUse . "/" . $imagePath;
      echo "<img src='" . $imagePath . "'  />"
    ?>
    <p>Direct link: <a href="<?php echo $directLink ?>"><?php echo $directLink ?></a>

  </body>
</html>
