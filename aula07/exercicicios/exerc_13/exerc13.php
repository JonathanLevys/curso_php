<?php
    $argo = $_POST["fiat"];
    $onix = $_POST["gm"];
    $polo = $_POST["vw"];

    if ($argo > $onix and $argo > $polo) {
        echo "FIAT ARGO";
    } elseif ($onix > $argo and $onix > $polo) { 
        echo "GM ONIX";
    } elseif ($polo > $argo and $polo > $onix) {
        echo "VW POLO";
    }
?>