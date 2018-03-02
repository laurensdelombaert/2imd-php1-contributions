<?php
  include_once "settings.inc.php";
  include_once "data.inc.php";
  include_once "functions.inc.php";

  switch (DISTANCE) {
    case 'close_by':
      uasort($users, 'cmpCresc');
    break;
    case 'far_away':
      uasort($users, 'cmpDesc');
    break;
  }

?><!DOCTYPE html>
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

 <?php include_once "header.inc.php"; ?>

  <ul>
    <?php foreach ($users as $user): ?>

        <li class="grid-container">
          <div class="grid-item profile-photo">
            <?php if( empty($user['photo']) ) {
              echo "<img src='img/no-profile.png'>";
            } else {
              echo "<img src='" . $user['photo'] . "'>";
            } ?>
          </div>
          <div class="grid-item user-information">
            <p class="user"><?php echo $user['name']; ?></p>
            <p class="username"><?php echo $user['username']; ?></p>
            <p class="location"><?php echo $user['location']; ?></p>
            <?php if( !empty($user['status']) ) {
              echo "<p class='status'>" . $user['status'] . "</p>";
            }?>
          </div>
          <div class="grid-item distance">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Line-style-icons-heart.svg/2000px-Line-style-icons-heart.svg.png" alt="">
            <p><?php echo $user['distance'] . "m" ?></p>
          </div>
        </li>

    <?php endforeach; ?>
  </ul>

  <?php include_once "footer.inc.php" ?>

</div>
</body>
</html>
