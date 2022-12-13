<?php 
    $all_text = "PHP è un linguaggio di scripting generico open source ampiamente utilizzato, particolarmente adatto per lo sviluppo web e può essere incorporato in HTML. Invece di molti comandi per l'output HTML, le pagine PHP contengono HTML con codice incorporato che fa 'qualcosa'. Il codice PHP è racchiuso in speciali istruzioni di inizio e fine elaborazione <?phpe?> che ti consentono di entrare e uscire dalla `modalità PHP`.";
    $censored_text = str_replace($_GET["bad_word"], "***", $all_text);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PHP BadWords</title>
    </head>
    <body>
        
        <div class="container">
            <div class="container-two">
                <h1>Frase non censurata:</h1>
                <p> <?php echo $all_text ?> </p>
                <strong> Lunghezza frase: <?php echo strlen($all_text) ?> </strong>
            </div>
            <div class="container-two">
                <h1>Frase censurata:</h1>
                <p> <?php echo $censored_text ?> </p>
                <strong> Lunghezza frase: <?php echo strlen($censored_text) ?> </strong>
            </div>
        </div>

    </body>
</html>