<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <section class="banner wrapper">
	<?php //echo do_shortcode('[smartslider3 slider=2]'); ?>
</section>

<section class="top-category">
<div class="container_24 mfwidth">

<div class="post-widget">

	<?php echo do_shortcode('[widget id="pe_recent_posts-3"]'); ?>

</div>

 </div>

</section>

<section class="ads-middle wrapper">
	<div class="container_24 mfwidth">
		<div class="mid-banner">
					 <div class="grid_18"> Check out all of our <abbr> Diamond Jewelry </abbr> including
Featured Products and Closeout Specials. </div>
 <div class="grid_6"> <a href="https://www.itshot.com/" target="_blank"> Click Here </a> </div>

				 </div>
	</div>

</section>

<section class="about wrapper">
	<div class="container_24 mfwidth">
		<div class="grid_16">
			<div class="about-para">

			<h3> About Us </h3>

			<p> ItsHot offers a selection of over 20,000 unique pieces of diamond jewelry along with designer watches. Shopping is delightfully convenient via their online store or in their storefront location located in New York’s prestigious diamond district. Known for high quality, a massive selection, and ultra-competitive pricing, it is easy to see why people come from all over the world to do business with ItsHot.</p>

<p style="margin-top: 15px;"> Aside from custom jewelry, they are also an authorized reseller of high-end diamond watches, meaning your purchase is backed by a manufacturer warranty. If you have any questions before or after your purchase, you will be pleasantly surprised by just how responsive and helpful the Itshot team is! If you are looking for a stunning piece of diamond jewelry, check out the huge selection today or enquire about a custom piece made just for you. </p>
			</div>
			</div>
		<div class="grid_8">

			<h3> Twitter Feed </h3>
           <div class="twitwrap">
		<a class="twitter-timeline" data-lang="en" data-dnt="true" data-tweet-limit="3" data-height="100" hide_media=true data-cards="hidden" href="https://twitter.com/itshotdotcom?ref_src=twsrc%5Etfw">Tweets by itshotdotcom</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

		</div>

	</div>

</section>

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
