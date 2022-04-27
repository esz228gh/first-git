<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/2ae352b0e8.js" crossorigin="anonymous"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <?php if(is_page_template("toppage.php")): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/toppage.css">
        <?php elseif(is_page_template("menu.php")): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/menu.css">
        <?php elseif(is_page_template("access.php")): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/access.css">
        <?php elseif(is_page_template("inside.php")): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/inside.css">
        <?php elseif(is_page_template("reservation.php")): ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reservation.css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/index.css">
        <?php endif; ?>
        <?php wp_head(); ?>
        
    </head>
    <body>
        <!-- ヘッダー -->
        <header>

        </header>