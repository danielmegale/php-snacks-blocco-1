<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if (strlen($name) <= 3) {
    $name_valid = false;
} else {
    $name_valid = true;
};
if (str_contains($email, '.') && str_contains($email, '@')) {
    $email_valid = true;
} else {
    $email_valid = false;
};

if (is_numeric($age)) {
    $age_valid = true;
} else {
    $age_valid = false;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($name_valid && $email_valid && $age_valid) : ?>
        <h1>Accesso riuscito</h1>
    <?php else : ?>
        <h1>Acesso negato</h1>
    <?php endif ?>
</body>

</html>