<?php

  include_once("data.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test Jezelf 1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="body-wrapper">

  <div class="grid-container">
    <div class="grid-item">
      <span>Time</span>
    </div>
    <div class="grid-item">
      <span>Description</span>
    </div>
    <div class="grid-item">
      <span>Category</span>
    </div>
  </div>
  <ul>
    <?php foreach ($toDo as $item): ?>

      <?php
          if ($item['time'] > 5) {
            $difficulty = "hard";
          } elseif ($item['time'] > 1 && $item['time'] <= 5) {
            $difficulty = "medium";
          } else {
            $difficulty = "easy";
          }
        ?>

      <li class="grid-container <?php echo $difficulty ?>">
        <div class="grid-item time">
          <?php if (!($item['time'] > 1)) {
            $hourOrHours = " hour";
          } else {
            $hourOrHours = " hours";
          }
          ?>
          <p> <?php echo $item['time'] . $hourOrHours ?> </p>
        </div>
        <div class="gird-item description">
          <p><?php echo $item['description'] ?></p>
        </div>
        <div class="gird-item category">
          <p><?php echo $item['category'] ?></p>
        </div>
      </li>

    <?php endforeach; ?>
  </ul>


</div>
</body>
</html>
