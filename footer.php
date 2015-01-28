            <?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

            <!-- hbd_after_main -->
            <?php hybrid_do_atomic( 'hbd_after_main' ); ?>
            <!-- end hbd_after_main -->

        </div><!-- #main -->

        <?php hybrid_get_sidebar( 'subsidiary' ); // Loads the sidebar/subsidiary.php template. ?>

        <?php hybrid_get_menu( 'subsidiary' ); // Loads the menu/subsidiary.php template. ?>

        <!-- hbd_before_footer -->
        <?php hybrid_do_atomic( 'hbd_before_footer' ); ?>
        <!-- end hbd_before_footer -->

        <footer <?php hybrid_attr( 'footer' ); ?>>

            <p class="credit">
                <?php printf(
                    /* Translators: 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link. */
                    __( 'Copyright &#169; %1$s %2$s. Powered by %3$s and %4$s.', 'hybrid-base' ),
                    date_i18n( 'Y' ), hybrid_get_site_link(), hybrid_get_wp_link(), hybrid_get_theme_link()
                ); ?>
            </p><!-- .credit -->

            <!-- hbd_footer -->
            <?php hybrid_do_atomic( 'hbd_footer' ); ?>
            <!-- end hbd_footer -->

        </footer><!-- #footer -->

        <!-- hbd_after_footer -->
        <?php hybrid_do_atomic( 'hbd_after_footer' ); ?>
        <!-- end hbd_after_footer -->

    </div><!-- #container -->

    <!-- hbd_after_body -->
    <?php hybrid_do_atomic( 'hbd_after_body' ); ?>
    <!-- end hbd_after_body -->

    <?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
