
<?php

  $page = basename($_SERVER['SCRIPT_NAME']);

 ?>

  <nav>
    <ul class="grid-container">
      <li class="grid-item"><a href="index.php" <?php if ($page == 'index.php') { echo 'class="active"';} ?> >Home</a></li>
      <li class="grid-item"><a href="about.php" <?php if ($page == 'about.php') { echo 'class="active"';} ?> >About</a></li>
      <li class="grid-item"><a href="blog.php" <?php if ($page == 'blog.php') { echo 'class="active"';} ?> >Blog</a></li>
      <li class="grid-item"><a href="contact.php" <?php if ($page == 'contact.php') { echo 'class="active"';} ?> >Contact</a></li>
    </ul>
  </nav>
