<?php if ( get_header_image() && !display_header_text() ) : // If there's a header image but no header text. ?>

    <a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

<?php elseif ( get_header_image() ) : // If there's a header image. ?>

    <img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />

<?php endif; // End check for header image. ?>
