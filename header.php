<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo(); ?></title>
    <?php wp_head('name'); ?>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <header>
        <div class="header-container">
            <div class="row">
                <div class="nine columns header-left">
                    <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                        <?php bloginfo('name'); ?></a></h1>
                        <h2><?php bloginfo('description'); ?></h2>
                </div>
                <div class="three columns header-right">
                    <p>1234 Slick's Place<br />
                    Mays Landing, NJ 08330<br />
                    (609) 555 - 9876</p>
                </div>
            </div>
        </div>
    </header>
    <!-- MENU CODE BEGINS -->
    <nav>
        <div class="header-container">
            <div class="row">
                <div class="twelve columns">
                    <?php
                    wp_nav_menu( array (
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </nav>
        <!-- MENU CODE ENDS -->
    <div class="container">
