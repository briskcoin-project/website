<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package accesspress_parallax
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) :?>
		<div class="top-footer footer-column-<?php echo accesspress_footer_count(); ?>">
			<div class="mid-content">
            <div class="top-footer-wrap clearfix">
				<?php if(is_active_sidebar('footer-1')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-2')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-3')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-4')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-4'); ?>
				</div>
				<?php endif; ?> 
            </div>
			</div>
		</div>
		<?php endif; ?>
		

		<div class="bottom-footer">
			<div class="mid-content clearfix">
				<div  class="copy-right">
                	<span style="font-weight: bold;">Donate Bitcoin (BTC): 12S9zLFnVibtiDSdB6J8ta12Dmr3x85Lot</span><br />
					<span style="font-weight: 0;">E-mail: support@briskcoin.org </span><br />
					<span style="font-weight: 0;">&copy; <?php echo date('Y')." "; bloginfo('name'); ?> </span>
				</div>
				<div class="footer-right-row">
					
					<div class="site-info site-info-ext-lng">
						<?php echo do_shortcode('[gtranslate]'); ?>
					</div>
					<div class="site-info">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<!--<div class="site-info site-info-ext-cmc">
						<a href="#" target="_blank"><img src="#"/></a>
					</div>--><!-- .site-info -->
					<div class="site-info site-info-ext-cmc">
						<a href="https://www.livecoinwatch.com/price/Briskcoin-__BKC" target="_blank"/>
							<img src="http://briskcoin.org/wp-content/uploads/2025/01/livecoinwatch56x56.png"/>
						</a>
					</div>
					<div class="site-info site-info-ext-cmc">
						<a href="https://coinpaprika.com/coin/bkc-briskcoin" target="_blank">
							<img src="http://briskcoin.org/wp-content/uploads/2024/12/coinpaprika_logo56x56-1.png"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="go-top"><a href="#page"><i class="fa fa-angle-up"></i></a></div>
<!--<div class="dvadsfront01">
	<div style="height:20px;width:200px;text-align:right;">
		<span style="font-size: 12px;" onclick="document.getElementsByClassName('dvadsfront01')[0].style.visibility = 'hidden';cursor: pointer;vertical-align: middle;">Close</span>
	</div>
 	<div style="background:black;width:200px;height:180px;margin-top:-3px;">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2900084726921838"
     crossorigin="anonymous"></script>
	<ins class="adsbygoogle"
		 style="display:inline-block;width:200px;height:180px"
		 data-ad-client="ca-pub-2900084726921838"
		 data-ad-slot="4240795350"></ins>
	<script>
		 (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
</div>-->
<?php wp_footer(); ?>
</body>
</html>