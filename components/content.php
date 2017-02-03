


        <?php

        if ( $_SERVER['REQUEST_URI'] == '/' ) {
            include $content_file_path . DIRECTORY_SEPARATOR . 'home.php';
        } else {
            include $content_file_path . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'] . '.php';
        }

        ?>



    <?php // print_r($_SERVER['REQUEST_URI']); ?>
    <!-- /.row -->
