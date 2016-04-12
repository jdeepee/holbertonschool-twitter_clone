<!DOCTYPE html>
<html>
  <head><title>Hello world!</title></head>
  <body>

    <p><?php echo "Hello world"; ?></p>

    <p><?php echo 3 + 6; ?></p>


    <?php
      $array = ["One", "Two", "Three"];
      foreach ($array as &$elem) {
    ?>

      <p><?php echo $elem; ?></p>

    <?php
      }
    ?>

  </body>
</html>
