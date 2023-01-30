<?php
    $filename = 'chat.txt';
    $handler = fopen($filename, 'a');

    if (false === $handler) {
        printf('Impossibile aprire il file %s', $filename);
        exit;
    }
    $msg = $_POST['utente'].": ".$_POST['messaggio']."<br>";
    fwrite($handler, $msg);

    fclose($handler);
    header("location: /index.php");
?>