<?php
/**
 * Template Name: blog
 */
get_header(); ?>

	<div class="wrapper innerwrap">
            <div class="container_24 mfwidth">
                <div class="grid_18">

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>


<?php if( have_posts() ): ?>

<?php while( have_posts() ): the_post(); ?>

<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_wrap">
<div class="postext"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( ); ?></a></div>
<div class="post_title"><h2 class="post_desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<div class="date-format"> <i class="font_icon">&#xf073;</i>
<span class="day"><?php the_time(' j'); ?></span>
<span class="month"><?php the_time('M, Y'); ?></span>
</div>

<div class="post_details">
<span class="author-links"><?php the_author_link(); ?></span>
<span class="comments"><?php comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?></span>
</div>
<div class="post_content"><?php the_excerpt(); ?></div>

</div>
</div>
<?php endwhile; ?>

<div class="navigation">
<span class="newer"><?php previous_posts_link(__('< Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older','example')) ?></span>
</div>

<?php else: ?>

<div id="post-404?" class="noposts">

<p><?php _e('None found.','example'); ?></p>

</div>

<?php endif; wp_reset_query(); ?>

</div>
<div class="grid_6 blog_hundred_per">
<?php dynamic_sidebar('blogsidebar'); ?> 
 <?php /* ?>  <?php get_sidebar('content'); ?> <?php */ ?>
</div>
</div>
</div>
<?php get_footer(); ?>