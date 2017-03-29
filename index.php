<?php
define("CONTENT_FOLDER", '_includes');
$content_file_path = dirname(__FILE__) . '/' . CONTENT_FOLDER;

include('components/dochead.html');
include('components/menu.html');
include('components/content.php');
include('components/footer.html');
include('components/_investee_signup.html');
?>