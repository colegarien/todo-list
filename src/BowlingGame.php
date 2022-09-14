<?php
$keepPlaying = true;
$frameIndex = 1;
$rollIndex = 1;
$handle = fopen ("php://stdin","r");
while ($keepPlaying) {
    echo "Frame " . $frameIndex . " - Roll " . $rollIndex . ": ";
    $line = trim(fgets($handle));
    echo "Rolled: " . $line;
    if ($line === 'exit') {
        $keepPlaying = false;
        echo "\nGoodbye!\n";
    }
}