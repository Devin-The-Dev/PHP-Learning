<?php
      function example($a, $b) {
          for ($i = 0; $i < $b; $i++) {
              echo "<h1>{$a} {$i}</h1>";
          }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo example("The count is", 4);?>
</body>
</html>