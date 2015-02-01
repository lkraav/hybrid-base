            <!-- hbd_after_main -->
            <?php hybrid_do_atomic( 'hbd_after_main' ); ?>
            <!-- end hbd_after_main -->

        </div><!-- #main -->

        <!-- hbd_before_footer -->
        <?php hybrid_do_atomic( 'hbd_before_footer' ); ?>
        <!-- end hbd_before_footer -->

        <footer <?php hybrid_attr( 'footer' ); ?>>

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
