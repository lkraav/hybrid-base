<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

    <!-- hbd_before_body -->
    <?php do_action( 'hbd_before_body' ); ?>
    <!-- end hbd_before_body -->

    <div id="container">

        <!-- hbd_before_header -->
        <?php do_action( 'hbd_before_header' ); ?>
        <!-- end hbd_before_header -->

        <header <?php hybrid_attr( 'header' ); ?>>

            <!-- hbd_header -->
            <?php do_action( 'hbd_header' ); ?>
            <!-- end hbd_header -->

        </header><!-- #header -->

        <!-- hbd_after_header -->
        <?php do_action( 'hbd_after_header' ); ?>
        <!-- end hbd_after_header -->

        <div id="main" class="main">

            <!-- hbd_before_main -->
            <?php do_action( 'hbd_before_main' ); ?>
            <!-- end hbd_before_main -->
