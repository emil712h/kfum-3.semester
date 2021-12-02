<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="forside">
            <img class="frontimg" src="<?php echo get_template_directory_uri() ?>/img/logoBG.jpg" class="center">
        </div>
      
        <?php wp_nav_menu(array("theme_location" => "main-menu")) ?>

    </header>
<main>

</main>