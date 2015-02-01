<?php if ( display_header_text() ) : // If user chooses to display header text. ?>

    <div <?php hybrid_attr( 'branding' ); ?>>
        <?php hybrid_site_title(); ?>
        <?php hybrid_site_description(); ?>
    </div><!-- #branding -->

<?php endif; // End check for header text. ?>
