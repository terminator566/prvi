<!DOCTYPE html>

<html>
<head>
    <title>Naslov</title>
</head>

    <link rel="stylesheet" type="text/css" href="pravila.css">
<body>
<h1>Prvi</h1>
</body>
<p>
    <?php
    echo('Pozdrav iz PHP-a    ');
    ECHO('<br>');
    echo(date('d.m.Y.'));
    ?>
</p>
<p>
    <?php

    $dana_do_praznika=45;
    echo('Do praznika je ostalo jos: <b>' . $dana_do_praznika);
    ?>
</p>
</html>
