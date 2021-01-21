<?php
function redirect($link){
    header("location: $link");
}
$link = "/github.com/AzizVirus";
redirect("$link");
?>
