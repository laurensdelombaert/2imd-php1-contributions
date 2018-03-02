
<?php

  $currentFile = $_SERVER["SCRIPT_NAME"];
  $parts = Explode('/', $currentFile);

 ?>

  <nav>
    <ul class="grid-container">
      <li class="grid-item"><a href="index.php" class="<?php if ($parts[count($parts) - 1] == "index.php") echo "active";?>">Home</a></li>
      <li class="grid-item"><a href="about.php" class="<?php if ($parts[count($parts) - 1] == "about.php") echo "active";?>">About</a></li>
      <li class="grid-item"><a href="blog.php" class="<?php if ($parts[count($parts) - 1] == "blog.php") echo "active";?>">Blog</a></li>
      <li class="grid-item"><a href="contact.php" class="<?php if ($parts[count($parts) - 1] == "contact.php") echo "active";?>">Contact</a></li>
    </ul>
  </nav>
