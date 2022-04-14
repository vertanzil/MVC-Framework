<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas>
    <div class="grid-y grid-padding-x" style="height: 100%;">
        <br>
        <div class="cell shrink">
        </div>
        <div class="cell auto">
            <ul class="vertical menu align-left">
                <li><a href="index.php?url=Index">Home</a></li>
                <li><a href="index.php?url=Test"' . '>Teste</a></li>
            </ul>
        </div>
        <footer class="footer">
        </footer>
    </div>
</div>