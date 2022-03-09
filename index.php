<?php
//definisco variabile stringa
$testo = 'Paragrafo di testo';

//definisco variabile in cui salva il parametro inserito nell'url
$urlVar = $_GET["parola"];

//sostituico la parola con gli asterischi
$testoCambiato = str_replace($urlVar, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <h2>Il paragrafo scelto è:</h2>
    <p><?php echo $testo;?></p>

    <h2>La lunghezza del paragrafo è di <?php echo strlen($testo);?> caratteri</h2>

    <h2>Il paragrafo cambiato è</h2>
    <p><?php echo $testoCambiato;?></p>

    <h2>La nuova lunghezza del paragrafo è di <?php echo strlen($testoCambiato);?> caratteri</h2>
</body>
</html>