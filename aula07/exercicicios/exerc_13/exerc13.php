<?php
    $argo = $_POST["fiat"];
    $onix = $_POST["gm"];
    $polo = $_POST["vw"];

    if ($argo > $onix and $argc > $polo) {
        echo "FIAT ARGO";
    } elseif ($onix > $argc and $onix > $polo) { 
        echo "GM ONIX";
    } elseif ($polo > $argc and $polo > $onix) {
        echo "VW POLO";
    }
?>