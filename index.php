<html>
    <head>
        <title>
            Chat - Andrea Cuppetello
        </title>
    </head>
    <style>
        *{
            font-size: 25px;
        }
    </style>
    <body>
        <form action="file.php" method="POST">
            <input type="text" name="utente" required><br>
            <textarea name="messaggio" rows="10" cols="50"></textarea><br>
            <input type="submit" name="submit" value="Invia">
        </form>
        <p>
            <?php
                $filename = 'chat.txt';
                $handler = fopen($filename, 'r');

                if (false === $handler) {
                    printf('Impossibile aprire il file %s', $filename);
                    exit;
                }

                $size = 1024;

                while (!feof($handler)) {
                    $content = fread($handler, $size);
                    echo $content;
                }

                fclose($handler);
            ?>
        </p>
    </body>
</html>