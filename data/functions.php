<?php 

function createSection($sectionTitle, $sectionBody) {
    echo("
            <h3 class='secHead'> $sectionTitle </h3>
            <hr class='secHeadBreak'>
            <p class='secBody'> $sectionBody </p>
        ");
}