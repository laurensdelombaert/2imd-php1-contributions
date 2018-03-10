<?php
    function checkActive($href) {
        $active = basename($_SERVER['SCRIPT_FILENAME']);
        if($active === $href) {
            return "class=\"active\"";
        }else{
            return null;
        }
    }
?>
<nav class="container">
    <ul class="clearfix">
        <li><a href="home.php"<?= checkActive("home.php"); ?>>Home</a></li>
        <li><a href="contact.php"<?= checkActive("contact.php"); ?>>Contact</a></li>
    </ul>
</nav>