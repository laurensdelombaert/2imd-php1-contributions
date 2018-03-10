<?php
    define("DISTANCE_USER", 20);
    $checkins = [
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/5/5f/Daenerys_Dragonpit.jpg",
            "name" => "Daenerys \"Stormborn\" Targaryen ",
            "place" => "Field of Fire",
            "area" => "The Reach",
            "date" => "2018-02-16 10:30",
            "message" => "DRACARYS!",
            "distance" => "55",
            "image" => "https://media1.popsugar-assets.com/files/thumbor/WpVVMLKFEZ49Zid_XGOuiizFaq0/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2017/08/07/837/n/1922283/9a6efc1e5988ba327de7c0.60110737_edit_img_cover_file_14344989_1502132259/i/Reactions-Daenerys-Saying-Dracarys-Game-Thrones.jpg"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/1/18/Season_6_hodor_main.jpg/revision/latest/scale-to-width-down/350?cb=20160617020835",
            "name" => "Hodor",
            "place" => "Heart Tree",
            "area" => "Beyond The Wall",
            "date" => "2018-02-16 10:30",
            "message" => "HoldTheDoor",
            "distance" => "45"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/1/1f/Night_King_BTW.jpg/revision/latest?cb=20171013162809",
            "name" => "Night King",
            "place" => "The Wall",
            "area" => "The North",
            "date" => "2018-02-16 10:30",
            "message" => "",
            "distance" => "30"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/5/58/Tyrion_main_s7_e6.jpg/revision/latest?cb=20170818050344",
            "name" => "Tyrion Lannister",
            "place" => "King's Landing",
            "area" => "The Crownlands",
            "date" => "2018-02-16 10:30",
            "message" => "",
            "distance" => "40"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/0/07/Melisandre_%28The_Queen%27s_Justice%29.png/revision/latest/scale-to-width-down/319?cb=20170830235514",
            "name" => "Melisandre",
            "place" => "Volantis",
            "area" => "Essos",
            "date" => "2018-02-16 10:30",
            "message" => "The Night is Dark",
            "distance" => "400"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/9/9f/Profile-Littlefinger.png/revision/latest/scale-to-width-down/335?cb=20170826005231",
            "name" => "Petyr \"Littlefinger\" Baelish",
            "place" => "The Eyrie",
            "area" => "The Vale of Arryn",
            "date" => "2018-02-16 10:30",
            "message" => "Chaos is a Ladder",
            "distance" => "400"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/7/7e/Sansastark706.jpg/revision/latest/scale-to-width-down/316?cb=20170828072803",
            "name" => "Sansa Stark",
            "place" => "Winterfell",
            "area" => "The North",
            "date" => "2018-02-16 10:30",
            "distance" => "4"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/5/54/Arya_the_dragon_and_the_wolf_s7.jpg/revision/latest/scale-to-width-down/319?cb=20170828062911",
            "name" => "Arya Stark",
            "place" => "Winterfell",
            "area" => "The North",
            "date" => "2018-02-16 10:30",
            "distance" => "6"
        ],
        [
            "avatar" => "https://vignette.wikia.nocookie.net/gameofthrones/images/d/d8/%22It%27s_Wasted_On_A_Cripple%22.png/revision/latest?cb=20171006183914",
            "name" => "Brandon Stark",
            "place" => "Winterfell",
            "area" => "The North",
            "date" => "2018-02-16 10:30",
            "distance" => "9"
        ]

    ];
    // voor het echter te laten lijken, random volgorde van de array content
    shuffle($checkins);
    $checkins = array_slice($checkins, 0, 5);


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.min.css">
    <title>Swarm</title>
</head>
<body>
    <?php include_once("header.inc.php"); ?>
    <main class="container">
        <ul>
            <?php foreach($checkins as $checkin) : ?>

                <li class="clearfix">
                    <div class="right clearfix">
                        <i class="far fa-heart"></i>
                        <br>
                        <span class="small">7m</span>
                    </div>
                    <figure class="avatar">
                        <img src="<?= $checkin["avatar"] ?>" onerror="this.src='http://via.placeholder.com/100x100'" alt="" class="swarmer">
                    </figure>

                    <span class="strong"><?= $checkin["name"]; ?></span>
                    <br>
                    <h2><?= $checkin["place"] ?></h2>
                    <span class="area"><?= $checkin["area"]; ?></span>
                    <?= (!empty($checkin["message"]) ? "<br><span class='message'>\"".$checkin["message"]."\"</span>" : ""); ?>
                    <br>
                    <span class='small'>
                        <?php
                            if($checkin["distance"] < DISTANCE_USER) {
                                echo "Closeby";
                            }else{
                                echo "Send a raven";
                            }
                        ?>
                    </span>
                    <?php if(isset($checkin["image"])) : ?>
                        <img src="<?= $checkin["image"]; ?>" alt="User attachment image" class="attachment">
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <?php include_once("footer.inc.php"); ?>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script>
        var checkins = document.querySelectorAll("main ul li");
        var checkinsTotal = checkins.length;
        var delay = 0.2;

        for (var i = 1; i < checkinsTotal; i++) {
            checkins[i].style = "animation-delay: " + delay + "s;";
            delay += 0.2;
        }
    </script>
</body>
</html>
