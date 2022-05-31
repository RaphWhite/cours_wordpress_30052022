<!DOCTYPE html>
<html>
<head>    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
   
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/favicon.png">
    
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />   

    
</head>

<body>

