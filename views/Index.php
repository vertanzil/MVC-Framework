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
            <?php
            Index::Welcome("You");
            ?>
        </div>
        <div class="cell medium-2">
        </div>
    </div>
</article>
</body>