<?php
// Tick each 10.5 seconds
//require_once("config.php");
$w1 = new EvTimer(2, 0, function () {
    echo "2 seconds elapsed\n";
});

?>