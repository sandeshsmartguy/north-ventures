<?php

if ( $_SERVER['REQUEST_URI'] == '/mie/' ) {
    include $content_file_path . DIRECTORY_SEPARATOR . 'mentoring-and-coaching.php';
} else {
    include $content_file_path . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'] . '.php';
}

?>

