<?php

    $text = $_GET['user-text'];
    $word = $_GET['user-word'];

    $censored_text = str_ireplace($word, '***', $text);

?>

<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - risultati</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    
    <h1 class="text-center">BadWords</h1>

    <div class="container p-3 border border-primary">
    
        <div class="text mb-3">

            <span class="fw-bold">Testo inserito:</span>
            <p class ="m-0">
                <?php 
                    echo $text;
                ?>
            </p>
            <span class="fw-bold">Lunghezza testo:</span>
            <span> <?php echo strlen($text); ?> </span>

        </div>

        <div class="text-censored">
            
            <span class="fw-bold">Testo censurato:</span>
            <p class ="m-0">
                <?php 
                    echo $censored_text;
                ?>
            </p>
            <span class="fw-bold">Lunghezza testo:</span>
            <span> <?php echo strlen($censored_text); ?> </span>

        </div>


    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>