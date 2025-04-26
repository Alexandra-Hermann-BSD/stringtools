<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use ahbsd\StringTool;

    $result = "";
    $string = "";
    $char = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string = $_POST["string"];
        $char = $_POST["char"];

        $stringTool = new StringTool($string);
        $count = $stringTool->countChars($char);

        $result = "<p>Die Anzahl der Vorkommen von '$char' im String '$string' ist: $count</p>";
    }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Tool</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h1>String Tool</h1>
        <p>Momentan vorhandene Klassen:</p>
        <ol>
            <li>StringTool</li>
            <li>StringToolTest</li>
        </ol>
    </div>
    <div class="container">
        <h2>String Tool</h2>
        <p>Geben Sie einen String und ein oder mehrere Zeichen ein, um die Anzahl der Vorkommen zu zählen.</p>
        <form method="post" action="">
            <label for="string">String:</label>
            <?php
                $format = "<input type=\"text\" id=\"string\" name=\"string\" value='%1\$s' required>";
                printf($format, htmlspecialchars($string ?? ""));
            ?>
            <br>
            <label for="char">Character(s):</label>
            <?php
                $format = "<input type=\"text\" id=\"char\" name=\"char\" value='%1\$s' required>";
                printf($format, htmlspecialchars($char ?? ""));
            ?>
            <br>
            <input type="submit" value="Count">
        </form>

        <?php
        if (!empty($result)) {
            printf("<div class='result'>%s</div>", $result);
        }
        ?>
    </div>
        <footer>
            <p>&copy; 2025 <a href="https://hermann-bsd.de" title="Homepage" target="_blank">Alexandra Hermann – Beratung, Software, Design</a> </p>
        </footer>
</body>
</html>
