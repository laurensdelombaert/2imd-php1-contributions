<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.min.css">
</head>
<body>
<?php include_once("nav.inc.php"); ?>
<main class="container">
    <form action="" method="post" name="contactForm">
        <ul>
            <li>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="uw naam">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="uw e-mail">
            </li>
            <li>
                <label for="message">Uw bericht</label>
                <textarea name="message" id="message"></textarea>
            </li>
            <li>
                <input type="submit" name="contactForm">
            </li>
        </ul>
    </form>
</main>
<?php include_once("footer.inc.php"); ?>
</body>
</html>