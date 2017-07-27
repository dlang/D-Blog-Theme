<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 * @package DLang
 * @subpackage DBlog
 * @since DBlog 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Content Copyright © 2016, 2017 by the <a href="https://dlang.org/foundation.html">D Language Foundation</a>, All Rights Reserved
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/dlang.js"></script>
<?php wp_footer(); ?>

</body>
</html>
