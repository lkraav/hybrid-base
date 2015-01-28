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

        <div class="skip-link">
            <a href="#content" class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'hybrid-base' ); ?></a>
        </div><!-- .skip-link -->

        <?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>

        <!-- hbd_before_header -->
        <?php do_action( 'hbd_before_header' ); ?>
        <!-- end hbd_before_header -->

        <header <?php hybrid_attr( 'header' ); ?>>

            <?php if ( display_header_text() ) : // If user chooses to display header text. ?>

                <div <?php hybrid_attr( 'branding' ); ?>>
                    <?php hybrid_site_title(); ?>
                    <?php hybrid_site_description(); ?>
                </div><!-- #branding -->

            <?php endif; // End check for header text. ?>

            <!-- hbd_header -->
            <?php do_action( 'hbd_header' ); ?>
            <!-- end hbd_header -->

        </header><!-- #header -->

        <!-- hbd_after_header -->
        <?php do_action( 'hbd_after_header' ); ?>
        <!-- end hbd_after_header -->

        <?php hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template. ?>

        <?php if ( get_header_image() && ! display_header_text() ) : // If there's a header image but no header text. ?>

            <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

        <?php elseif ( get_header_image() ) : // If there's a header image. ?>

            <img class="header-image" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="" />

        <?php endif; // End check for header image. ?>

        <div id="main" class="main">

            <!-- hbd_before_main -->
            <?php do_action( 'hbd_before_main' ); ?>
            <!-- end hbd_before_main -->

            <?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
