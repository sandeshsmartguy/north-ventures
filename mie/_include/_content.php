

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">


        <?php

        if ( $_SERVER['REQUEST_URI'] == '/mie/' ) {
            include $content_file_path . DIRECTORY_SEPARATOR . 'home.php';
        } else {
            include $content_file_path . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'] . '.php';
        }

        ?>

    </div>

    <?php // print_r($_SERVER['REQUEST_URI']); ?>
    <!-- /.row -->

</div>
<!-- / page container  -->
