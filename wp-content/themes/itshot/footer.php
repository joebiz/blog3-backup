<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<section class="footer wrapper"> 
	
	<div class="footer-top wrapper"> 
		<div class="container_24 mfwidth">
			<div class="grid_12"> 
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.png" alt="itshot">
				
				<ul> 
					<li> 48 West 48th St. Suite 302 New York, </li>
<li> NY 10036 </li>
<li> Tel: <a href="tel:1-212-398-3123"> 1-212-398-3123 </a> </li>
<li> Email: <a href="mailto:sales@ItsHot.com"> sales@ItsHot.com </a> </li> 
				</ul>
				 </div>
			<!-- <div class="grid_8"> <h3> Categories </h3> 
			<ul class="footer-categories"> 
           <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'nav-menu' ) ); ?>	
			</ul>
			</div> -->
			<div class="grid_12"> 
				<h3> Newsletter Sign Up </h3>  
				<p> Sign up to our newsletter and get exclusive deals you will not find anywhere else straight to your inbox! </p>
                <?php echo do_shortcode('[widget id="email-subscribers-2"] '); ?>
			
			</div>
			
			 </div>
		
	</div>
	<div class="footer-bottom wrapper"> 
		
		<div class="container_24 mfwidth"> 
			<div class="grid_16"> Copyright &copy; <?php echo date("Y"); ?> ItsHot.com. All Rights Reserved. </div>
			<div class="grid_8">
				 <ul class="footer-social">
					 <li> <i> <a href="https://www.facebook.com/ItsHot" target="_blank"> &#xf09a; </a> </i> </li>
					<li> <i> <a href="https://twitter.com/itshotdotcom" target="_blank"> &#xf099; </a> </i> </li>
					<li> <i> <a href=" https://pinterest.com/itshotdotcom" target="_blank"> &#xf231;</a> </i> </li>
					<li> <i> <a href="https://instagram.com/itshotjewelry/" target="_blank"> &#xf16d; </a> </i> </li>
				 </ul>
			 </div>
			
			 </div>
	</div>
	
	
</section>
<?php wp_footer(); ?>
<script> (function(c,o,n,v,e,r,t,s){s=c.fetch?'f':'', c.ccartObj=e,c[e]=c[e]||function(){(c[e].q=c[e].q||[]).push(arguments)},c[e].t=Date.now(), r=o.createElement(n);r.async=1;r.src=v+s+'.js';t=o.getElementsByTagName(n)[0];t.parentNode .insertBefore(r,t)})(window, document,'script','//d241ujsiy3yht0.cloudfront.net/97112609','ccart') </script> 

</body>
</html>
