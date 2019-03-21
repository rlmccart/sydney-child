<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<span class="sep"> | </span>
			<div class="footer-wrapper">
				<footer class="pi-footer">
					<div class="pi-footer__col ">
						<ul>
							<a href="#" class="pi-footer__sol-sm">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
								<path d="M28.347,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.625-11.023,24.625-24.623
								C52.972,16.184,41.946,5.157,28.347,5.157z M34.864,29.679h-4.264c0,6.814,0,15.207,0,15.207h-6.32c0,0,0-8.307,0-15.207h-3.006
								V24.31h3.006v-3.479c0-2.49,1.182-6.377,6.379-6.377l4.68,0.018v5.215c0,0-2.846,0-3.398,0c-0.555,0-1.34,0.277-1.34,1.461v3.163
								h4.818L34.864,29.679z"/>
								</svg>
							</a>
							<a href="#" class="pi-footer__sol-sm">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
								<g>
									<path " d="M28.347,5.155c-13.6,0-24.625,11.025-24.625,24.625c0,13.602,11.025,24.625,24.625,24.625
										c13.598,0,24.623-11.023,24.623-24.625C52.97,16.181,41.944,5.155,28.347,5.155z M42.062,41.741c0,1.096-0.91,1.982-2.031,1.982
										H16.613c-1.123,0-2.031-0.887-2.031-1.982V18.052c0-1.094,0.908-1.982,2.031-1.982H40.03c1.121,0,2.031,0.889,2.031,1.982V41.741z"
										/>
									<path " d="M33.099,26.441c-2.201,0-3.188,1.209-3.74,2.061v0.041h-0.027c0.01-0.012,0.02-0.027,0.027-0.041v-1.768h-4.15
										c0.055,1.17,0,12.484,0,12.484h4.15v-6.973c0-0.375,0.027-0.744,0.137-1.012c0.301-0.744,0.984-1.52,2.129-1.52
										c1.504,0,2.104,1.146,2.104,2.824v6.68h4.15V32.06C37.878,28.224,35.829,26.441,33.099,26.441z"/>
									<path " d="M20.864,20.712c-1.419,0-2.349,0.934-2.349,2.159c0,1.197,0.9,2.158,2.294,2.158h0.027c1.447,0,2.348-0.961,2.348-2.158
										C23.157,21.646,22.284,20.712,20.864,20.712z"/>
									<rect " x="18.762" y="26.734" width="4.151" height="12.484"/>
								</g>
								</svg>
							</a>
							<a href="#" class="pi-footer__sol-sm">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="56.7px" height="56.7px" viewBox="0 0 56.7 56.7" style="enable-background:new 0 0 56.7 56.7;" xml:space="preserve">
								<g>
									<circle " cx="28.1" cy="30" r="4.4"/>
									<path d="M33.6,19.2h-11c-1.6,0-3,0.5-3.9,1.4c-0.9,0.9-1.4,2.3-1.4,3.9v11c0,1.6,0.5,3,1.5,4c1,0.9,2.3,1.4,3.9,1.4h10.9
										c1.6,0,3-0.5,3.9-1.4c1-0.9,1.5-2.3,1.5-3.9v-11c0-1.6-0.5-2.9-1.4-3.9C36.6,19.7,35.3,19.2,33.6,19.2z M28.1,36.8
										c-3.8,0-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8S35,26.2,35,30C35,33.8,31.9,36.8,28.1,36.8z M35.2,24.5c-0.9,0-1.6-0.7-1.6-1.6
										s0.7-1.6,1.6-1.6s1.6,0.7,1.6,1.6S36.1,24.5,35.2,24.5z"/>
									<path " d="M28.3,5.2c-13.6,0-24.6,11-24.6,24.6c0,13.6,11,24.6,24.6,24.6c13.6,0,24.6-11,24.6-24.6C53,16.2,41.9,5.2,28.3,5.2z
										 M41.4,35.6c0,2.3-0.8,4.3-2.2,5.7c-1.4,1.4-3.4,2.1-5.6,2.1H22.7c-2.2,0-4.2-0.7-5.6-2.1c-1.5-1.4-2.2-3.4-2.2-5.7v-11
										c0-4.6,3.1-7.8,7.8-7.8h11c2.3,0,4.2,0.8,5.6,2.2c1.4,1.4,2.1,3.3,2.1,5.6V35.6z"/>
								</g>
								</svg>
							</a>
							<li>123-456-7890</li>
							<li>Paterson Industries</li>
							<li>123 Fake St., Dawson Creek, British Columbia</li>
							<li><a href="mailto:info@patersonindustries.com">info@patersonindustries.com</a></li>
						</ul>
					</div>
					<div class="pi-footer__col">
						<div class="pi-footer__col-logo">
							<img src="<?php bloginfo('template_url'); ?>/images/pi-logo-vertical-white.png" alt="Paterson Industry Logo"></img>
						</div>
					</div>
					<div class="pi-footer__col pi-footer__col-nav ">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Projects</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
				</footer>
				<div class="footer-mountains"></div>
			</div> <!-- CLOSE FOOTER WRAPPER -->
			<article class="pi-copyright">
				<p>Created by Coral Creative &copy;<?= date('Y'); ?> </p>
			</article>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
