<?php

function pre($algo) {
    echo '<pre>';
    var_dump($algo);
    echo '</pre>';
}


function dd($algo) {
    pre($algo);
    exit;
}



?>
