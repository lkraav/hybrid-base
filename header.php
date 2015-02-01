<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

    <!-- hbd_before_body -->
    <?php hybrid_do_atomic( 'hbd_before_body' ); ?>
    <!-- end hbd_before_body -->

    <div id="container">

        <!-- hbd_before_header -->
        <?php hybrid_do_atomic( 'hbd_before_header' ); ?>
        <!-- end hbd_before_header -->

        <header <?php hybrid_attr( 'header' ); ?>>

            <div <?php hybrid_attr( 'wrap', 'header' ); ?>>

            <!-- hbd_header -->
            <?php hybrid_do_atomic( 'hbd_header' ); ?>
            <!-- end hbd_header -->

            </div><!-- .wrap_header -->

        </header><!-- #header -->

        <!-- hbd_after_header -->
        <?php hybrid_do_atomic( 'hbd_after_header' ); ?>
        <!-- end hbd_after_header -->

        <div id="main" class="main">

            <div <?php hybrid_attr( 'wrap', 'main' ); ?>>

            <!-- hbd_before_main -->
            <?php hybrid_do_atomic( 'hbd_before_main' ); ?>
            <!-- end hbd_before_main -->
