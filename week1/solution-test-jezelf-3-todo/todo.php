<?php
    $tasks = [
        [
            "name" => "Reda Quest",
            "duration" => 0.5,
            "category" => 4,
            "description" => "Reda was an Egyptian nomadic merchant and child prodigy who made rounds throughout Lower Egypt with his camel Amun during the reign of Ptolemy XIII."
        ],
        [
            "name" => "Gotham seizoen 3 kijken",
            "duration" => 50,
            "category" => 1,
            "description" => "",
            "image" => "https://i1.wp.com/theknockturnal.com/wp-content/uploads/2017/05/Gotham-Season-3-TV-Series-Cast-4K.jpg?resize=770%2C433&ssl=1"
        ],
        [
            "name" => "Wachtrij Teams inbouwen",
            "duration" => 3,
            "category" => 1,
        ],
        [
            "name" => "Schetsen explanation video",
            "duration" => 0.5,
            "category" => 2,
        ],
        [
            "name" => "Schoolprojecten Git plaatsen",
            "duration" => 1,
            "category" => 2,
        ]
    ];
    function durationColor($duration) {
        if($duration > 0 && $duration < 1) {
            return "green";
        }elseif($duration > 1 && $duration < 5) {
            return "orange";
        }else{
            return "red";
        }
    }
    function categoryIcon($category) {
        switch($category) {
            case 1:
                return "fas fa-home";
                break;
            case 2:
                return "fas fa-graduation-cap";
                break;
            case 3:
                return "fas fa-briefcase";
                break;
            case 4:
                return "fas fa-gamepad";
                break;
            default:
                return "fas fa-inbox";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is not Wunderlist, wél een php oefening</title>
    <link rel="stylesheet" href="main.min.css">
</head>
<body>
    <main>
        <ul>
            <?php $i = count($tasks); ?>
            <?php foreach($tasks as $task) : ?>
                <li class="<?= durationColor($task["duration"]); ?>" style="z-index: <?= $i; ?>;">
                    <?= $task["name"]; ?>
                    <i class="<?= categoryIcon($task["category"]); ?>"></i>
                </li>
                <?php if(isset($task["description"]) || isset($task["image"])): ?>
                    <article>
                        <?= (!empty($task["description"]) ? "<p>".$task["description"]."</p>" : null); ?>
                        <?php if(!empty($task["image"])) : ?>
                            <img src="<?= $task["image"]; ?>" alt="<?= $task["name"]; ?> image">
                        <?php endif; ?>
                    </article>
                <?php endif; ?>
                <?php $i--; ?>
            <?php endforeach; ?>
        </ul>
        <i class="fas fa-gem"></i>
    </main>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="script.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</body>
</html>