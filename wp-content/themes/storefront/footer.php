<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			 do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
		<div class="footer_icons">
			<a class="footer_icon footer_icon-fanpage" href="https://www.facebook.com/rustichome.hn/?fref=ts" target="_blank" title="Fanpage Gỗ Hoa">Fanpage Gỗ Hoa</a>
			<a class="footer_icon footer_icon-youtube" href="<?php echo get_page_link(2); ?>" title="Youtube Gỗ Hoa">Youtube Gỗ Hoa</a>
			<a class="footer_icon footer_icon-instagram" href="<?php echo get_page_link(2); ?>" title="Instagram Gỗ Hoa">Instagram Gỗ Hoa</a>
			<a class="footer_icon footer_icon-email" href="<?php echo get_page_link(2); ?>" title="Email Gỗ Hoa">Email Gỗ Hoa</a>
			<span class="footer_icon-hotline">HOTLINE:<a href="tel:01245336688" title="Hotline Gỗ Hoa"> 01245336688</a></span>
		</div>
		<nav class="navbot">
			<div class="col-full">
				<ul class="navbot_lst">
					<li class="navbot_item"><a href="<?php echo get_page_link(2); ?>" title="Liên hệ">Liên hệ</a></li>
					<li class="navbot_item"><a href="<?php echo get_page_link(2); ?>" title="About us">About us</a></li>
					<li class="navbot_item"><a href="<?php echo get_page_link(2); ?>" title="Chính sách bán hàng">Chính sách bán hàng</a></li>
					<li class="navbot_item"><a href="<?php echo get_page_link(2); ?>" title="Cam kết">Cam kết</a></li>
					<li class="navbot_item"><a href="<?php echo get_page_link(2); ?>" title="Bản quyền">Bản quyền</a></li>
				</ul>
			</div>
		</nav>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/4/b/4be8f8c81cd3b39284ed3c3323f46550/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
</script>
</body>
</html>
