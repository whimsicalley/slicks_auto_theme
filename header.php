<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo(); ?></title>
    <?php wp_head('name'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <header>
        <div class="header-container">
            <div class="row">
                <div class="eight columns header-left">
                    <h1><a href="<?php $url = home_url('/'); echo $url; ?>">
                        <?php bloginfo('name'); ?></a></h1>
                        <h2><?php bloginfo('description'); ?></h2>
                </div>
                <div class="four columns header-right">
                    <p>1234 Slick's Place<br />
                    Mays Landing, NJ 08330<br />
                    (609) 555 - 9876</p>
                    <?php
                        get_search_form();
                    ?>
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
