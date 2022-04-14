<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MVC - Home</title>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./views/css/core.css">
    <link rel="stylesheet" href="./views//css/ticker.css">
    <link rel="stylesheet" href="./views/css/foundation.css">

</head>
<body>

<?php

use App\controllers\Index;
include "./templates/Navigation.php" ?>
?>
<article class="grid-container">
    <?php Index::Header() ?>
    <p class="lead text-white mb-0">
    <div class="grid-x">

        <div class="cell medium-2">
            <?php Index::Welcome("You"); ?>
        </div>

        <div class="cell medium-2">
        </div>
    </div>
</article>
</body>