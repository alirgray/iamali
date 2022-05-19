<?php do_action( 'main_bottom' ); ?>
</section> <!-- .main -->

<?php do_action( 'after_main' ); ?>
</div>
</div><!-- .overflow-container -->

<?php dynamic_sidebar( 'footer_widget' ); ?>

<footer id="site-footer" class="site-footer" role="contentinfo">
	<?php do_action( 'footer_top' ); ?>
	<div class="design-credit">
        <span>
            <?php
            $footer_text = sprintf( __( '@2020 Ali Gray' ) );
            $footer_text = apply_filters( 'ct_chosen_footer_text', $footer_text );
            echo wp_kses_post( $footer_text );
            ?>
        </span>
	</div>
</footer>


<?php do_action( 'body_bottom' ); ?>

<?php wp_footer(); ?>

<script>
  jQuery(document).ready(function($){
    // Parallax
    divisor = 7; // speed is determined by y/divisor
    $(window).bind('scroll', function(e) {
      var y = $(window).scrollTop();
      $('body').css("backgroundPosition","right -"+y/divisor+"px, right -"+y/divisor+"px, 0 0");
    });
  });
</script>

</body>
</html>