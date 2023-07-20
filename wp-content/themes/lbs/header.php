<!doctype html>
<html lang="<?php bloginfo( 'language' ) ?>">
<head>    
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
        $entry = get_query_var('ENTRY');
        load_assets(['main', $entry]);
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>

