<?php
$matches = [
    [
        'home_team' => 'juventus',
        'visitor'  => 'inter',
        'home_points' => 2,
        'visitor_points' => 1
    ],
    [
        'home_team' => 'milan',
        'visitor'  => 'napoli',
        'home_points' => 4,
        'visitor_points' => 0
    ],
    [
        'home_team' => 'chealsea',
        'visitor'  => 'manchester city',
        'home_points' => 3,
        'visitor_points' => 3
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li><?= $match['home_team'] . '-' ?><?= $match['visitor'] . '|' ?> <?= $match['home_points'] . '-' ?><?= $match['visitor_points'] ?> </li>
        <?php endforeach ?>
    </ul>
</body>

</html>