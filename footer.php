            <!-- hbd_after_main -->
            <?php do_action( 'hbd_after_main' ); ?>
            <!-- end hbd_after_main -->

            </div><!-- #wrap-main -->

        </div><!-- #main -->

        <!-- hbd_before_footer -->
        <?php do_action( 'hbd_before_footer' ); ?>
        <!-- end hbd_before_footer -->

        <footer <?php hybrid_attr( 'footer' ); ?>>

            <div <?php hybrid_attr( 'wrap', 'footer' ); ?>>

            <!-- hbd_footer -->
            <?php do_action( 'hbd_footer' ); ?>
            <!-- end hbd_footer -->

            </div><!-- #wrap-footer -->

        </footer><!-- #footer -->

        <!-- hbd_after_footer -->
        <?php do_action( 'hbd_after_footer' ); ?>
        <!-- end hbd_after_footer -->

    </div><!-- #container -->

    <!-- hbd_after_body -->
    <?php do_action( 'hbd_after_body' ); ?>
    <!-- end hbd_after_body -->

    <?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
