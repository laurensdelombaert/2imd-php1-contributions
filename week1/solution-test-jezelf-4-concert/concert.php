<?php
    function checkActive($href) {
        if(isset($_GET['filter'])) {
            $active = $_GET["filter"];
            if($active === $href) {
                return "class=\"active\"";
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
    // Bij echo later -1 voor het simuleren van een primary key (ID) uit de DB.
    $venues = [
        "AB Club",
        "AB Main Hall",
        "Huis 3"
    ];
    $concerts = [
        [
            "name" => "Kulu Shaker",
            "artist" => "Olivier Terwagne",
            "desc" => "British psych-pop icon is hatching comeback & a new LP!",
            "image" => "https://images.pexels.com/photos/518389/pexels-photo-518389.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb",
            "date" => "2016-02-18 20:00",
            "location" => 1,
            "capacity" => 100,
            "bought" => 100
        ],
        [
            "name" => "Black Box Revelation",
            "artist" => "Mo & Grazz",
            "desc" => "Glorious return of Black Box to AB!",
            "image" => "https://images.pexels.com/photos/167636/pexels-photo-167636.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb",
            "date" => "2016-02-18 20:00",
            "location" => 2,
            "capacity" => 150,
            "bought" => 150
        ],
        [
            "name" => "Screening: Pulp: A film about life, death & supermarkets",
            "artist" => "Mo & Grazz",
            "desc" => "Documantary about one of Britpop's most important bands",
            "image" => "https://images.pexels.com/photos/196652/pexels-photo-196652.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb",
            "date" => "2016-02-18 20:00",
            "location" => 3,
            "capacity" => 150,
            "bought" => 100
        ]
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.min.css">
</head>
<body>
    <aside id="filter">
        <h1>Filter by venue:</h1>
        <nav>
            <ul>
                <?php foreach($venues as $venue) : ?>
                    <li>
                        <a href="?filter=<?= $venue; ?>" <?= checkActive($venue); ?>>
                            <?= urldecode($venue); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
    <main>
        <?php if(!isset($_GET["filter"]) || (isset($_GET["filter"]) && !empty($_GET["filter"]))) : ?>
            <?php foreach ($concerts as $concert) : ?>
                <?php if(!isset($_GET["filter"]) || $_GET["filter"] == $venues[$concert["location"]-1]) : ?>
                    <article class="clearfix">
                        <figure>
                            <img src="<?= $concert["image"]; ?>" alt="">
                        </figure>
                        <time>
                            <?= date("D d M Y", strtotime($concert["date"])); ?>
                        </time>
                        <br>
                        <h2><?= $concert["name"]; ?></h2>
                        <span class="artist"><?= $concert["artist"]; ?></span>
                        <p><?= $concert["desc"]; ?></p>
                        <ul>
                            <li class="hour">
                                <?= explode(" ", $concert["date"])[1]; ?>
                            </li>
                            <li class="location">
                                <?= $venues[$concert["location"]-1]; ?>
                            </li>
                            <li class="ticket">
                                <?= ($concert["capacity"] <= $concert["bought"] ? "sold out" : "buy ticket") ?>
                            </li>
                        </ul>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</body>
</html>