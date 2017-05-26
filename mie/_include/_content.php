<?php

if ( $_SERVER['REQUEST_URI'] == '/mie/' ) {
    include $content_file_path . DIRECTORY_SEPARATOR . 'home.php';
} elseif ( $_SERVER['REQUEST_URI'] == '/mie/services/' ) {
    include $content_file_path . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'] . 'visiting-faculty-onboarding-support-for-mba-institutions.php';
} else {
    include $content_file_path . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'] . '.php';
}

?>

