<?php
/**
 * The footer template
 *
 *
 * @package Black Box Cakery
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer>			
			<div class="aimhigher logo">
				<a href="https://aimhigherweb.design" target="_blank" rel="nofollow">
					<?php 
						$logo_aimhigher = get_site_url() . '/wp-content/themes/blackboxcakery/resources/img/aimhigher.svg';
						echo file_get_contents($logo_aimhigher);
					?>
				</a>
			</div>
		</footer>

		<script type="text/javascript" src="/wp-content/themes/blackboxcakery/resources/js/main.js" ></script>
		<?php wp_footer(); ?>
    </body>
</html>
