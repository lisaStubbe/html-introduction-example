<?php
    require_once('lib/H1.php');
    require_once('lib/P.php');

    $title = new H1("Hello");
    $anotherTitle = new H1("Ola");

    $text = new P("lorem ipsum...");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Example</title>
</head>
<body>
    <?php echo $title; ?>
    <?php echo $text; ?>
    ...
    ...
    <?php echo $anotherTitle; ?>
</body>
</html>