<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <?php
        $myString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur unde fugit quod rem possimus iure asperiores voluptatibus necessitatibus, ipsum reprehenderit. Aliquam consequuntur, minima accusantium voluptate eligendi quo culpa laudantium ut.";
    ?>
    
    <p>
        <?php echo $myString; ?>
    </p>
    <span>
        myString's length: <?php echo strlen($myString); ?>
    </span>

    <?php
        $badWord = $_GET["badWord"];
        $censoredString = str_replace($badWord, "***", $myString);
    ?>

    <p>
        <?php echo $censoredString; ?>
    </p>
    <span>
        censoredString's length: <?php echo strlen($censoredString); ?>
    </span>
</body>
</html>