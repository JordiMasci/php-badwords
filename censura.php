<?php

// Stampare a schermo oparagrafo e lunghezza

$paragraph = $_GET['paragraph'];
$paragraph_len = strlen($paragraph);

// stampare nuovo p e lunghezza
// dopo aver sostituito con (***) la bad word
$badword = $_GET['badword'];
$censored_paragraph = str_replace($badword, '***', $paragraph);
$censored_paragraph_len = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <p>
            <b>Il pragrafo è lungo <?php echo $paragraph_len ?> caratteri</b>
            <br />
            <?php echo $paragraph ?>
        </p>
        <hr>
        <p>
            <b>
                <?php echo $censored_paragraph_len ?>
            </b>
            <?php echo $censored_paragraph ?>
        </p>

    </div>
</body>

</html>