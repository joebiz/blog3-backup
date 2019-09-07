<?php
add_action('ampforwp_single_design_type_handle', "ampforwp_singlepage_design_type");
function ampforwp_singlepage_design_type(){
	global $redux_builder_amp;
	if ( $redux_builder_amp['single-design-type'] == '2') { ?>
	<div class="sd-2 sgl">
 		<div class="cntr">
 			<?php if( 1 == $redux_builder_amp['ampforwp-bread-crumb'] ) { ?>
 			<?php amp_breadcrumb();?>
 			<?php } ?>
 			<div class="cat-aud">
	 			<?php amp_categories_list();?>
	 			<div class="author-details">
		            <?php amp_date(array('custom_format' => 'F j, Y'));?>
		            | <strong><?php echo ampforwp_translation( $redux_builder_amp['amp-translator-on-text'].'  ', 'On  ' ) ?></strong> 
		           	<span><?php amp_date('date'); ?></span>
			    </div>
		    </div>
			<?php amp_title(); ?>
			<?php if( true == $redux_builder_amp['enable-excerpt-single'] ){ ?>
				<div class="exc">
				   <?php amp_excerpt(20); ?>
			    </div>
			<?php } ?>
			<?php if( $redux_builder_amp['amp-author-description'] ) { ?>
				<?php amp_author_box( 
					array(	'avatar'=>true,
							'avatar_size'=>38,
							'author_prefix'=> ampforwp_translation( $redux_builder_amp['amp-translator-by-text'].' ', 'By ' ))
					); ?>
			<?php } ?>
			<div class="artl">
				<div class="lft">
					<?php if ( isset($redux_builder_amp['swift-featued-image']) && $redux_builder_amp['swift-featued-image'] && ampforwp_has_post_thumbnail() ) { ?>
						<?php amp_featured_image();?>
					<?php } ?>
					<div class="cntn-wrp">
						<?php amp_content(); ?>
					</div>
					<div class="ss-shr">
						<ul>
					<?php if($redux_builder_amp['enable-single-facebook-share']){?>
					<li>
						<a class="s_fb" target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-twitter-share']){?>
					<li>
						<a class="s_tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
						</a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-gplus-share']){?>
					<li>
						<a class="s_gp" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-email-share']){?>
					<li>
						<a class="s_em" target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-pinterest-share']){
						$thumb_id = $image = '';
						if (has_post_thumbnail( ) ){
								$thumb_id = get_post_thumbnail_id(get_the_ID());
							$image = wp_get_attachment_image_src( $thumb_id, 'full' );
							$image = $image[0]; 
							}?>
					<li>
						<a class="s_pt" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo $image; ?>&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-linkedin-share']){?>
					<li>
						<a class="s_lk" target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-whatsapp-share']){?>
					<li>
						<a class="s_wp" target="_blank" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-vk-share']){?>
					<li>
						<a class="s_vk" target="_blank" href="http://vk.com/share.php?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
					<li>
						<a class="s_od" target="_blank" href="https://ok.ru/dk?st.cmd=addShare&st._surl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-reddit-share']){?>
					<li>
						<a class="s_rd" target="_blank" href="https://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-tumblr-share']){?>
					<li>
						<a class="s_tb" target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-telegram-share']){?>
					<li>
						<a class="s_tg" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-digg-share']){?>
					<li>
						<a class="s_dg" target="_blank" href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-stumbleupon-share']){?>
					<li>
						<a class="s_su" target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-wechat-share']){?>
					<li>
						<a class="s_wc" target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/wechat/offer?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-viber-share']){?>
					<li>
						<a class="s_vb" target="_blank" href="viber://forward?text=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if ( isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
					<li>
						<a class="s_ym" target="_blank" href="http://www.yummly.com/urb/verify?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&yumtype=button"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['ampforwp-facebook-like-button']){?>
					<li>
						<amp-facebook-like width=90 height=28
		 					layout="fixed"
		 					data-size="large"
		    				data-layout="button_count"
		    				data-href="<?php echo esc_url(get_the_permalink());?>">
						</amp-facebook-like>
					</li>
					<?php } ?>
					</ul>
					</div>
					<?php amp_post_navigation();?>
					<?php if( $redux_builder_amp['amp-author-description'] ) { ?>
						<div class="artl-atr">
						<?php amp_author_box( 
							array(	'avatar'=>true,
									'avatar_size'=>50,
									'author_description'=>true)
							); ?>
						</div>
					<?php } ?>
					<?php if( true == $redux_builder_amp['ampforwp-tags-single'] && amp_tags_list()){ ?>
			            <div class="tags">
			            	<?php amp_tags_list();?>
			            </div>
		            <?php } ?>
					<div class="cmts">
						<?php amp_comments();?>
						<?php do_action('ampforwp_post_after_design_elements'); ?>
					</div>
				</div>
				<div class="rft">
					<div class="ads"></div>
					<?php if ( isset($redux_builder_amp['ampforwp-single-related-posts-switch']) && $redux_builder_amp['ampforwp-single-related-posts-switch'] ) {
						 $my_query = ampforwp_related_post_loop_query();
						if( $my_query->have_posts() ) { ?>
						  	<div class="srp">
						  		<?php ampforwp_related_post(); ?>
					            <ul class="clearfix">
							        <?php
							          while( $my_query->have_posts() ) {
							            $my_query->the_post();
							        ?>
							        <li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
							            <div class="rlp-image">
								            <?php if ( true == $redux_builder_amp['ampforwp-single-related-posts-image'] ) { ?>     
								                <?php ampforwp_get_relatedpost_image('full',array('image_crop'=>'true','image_crop_width'=>65,'image_crop_height'=>65) );?>
											<?php } ?>
											<?php $argsdata = array(
													'show_author' => false,
													'show_excerpt' =>false
														);
											ampforwp_get_relatedpost_content($argsdata); ?> 
										</div>
							        </li><?php
							        } ?>
		                        </ul>
		                    </div>
				   		<?php } ?>
		    		<?php wp_reset_postdata(); }?>
					<?php if ( isset($redux_builder_amp['ampforwp-swift-recent-posts']) && $redux_builder_amp['ampforwp-swift-recent-posts']){?>
						<div class="rc-p">
							<h3><?php echo ampforwp_translation($redux_builder_amp['amp-translator-recent-text'], 'Recent Posts' ); ?></h3>
								<?php while( amp_loop('start', array( 'posts_per_page' => 6 ) ) ): ?>
									<div class="rp">
										<?php
										$width 	= 65;
										$height = 65;
										if( true == $redux_builder_amp['ampforwp-homepage-posts-image-modify-size'] ){
											$width 	= $redux_builder_amp['ampforwp-swift-homepage-posts-width'];
											$height = $redux_builder_amp['ampforwp-swift-homepage-posts-height'];
										}
										 $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'full','image_crop'=>'true','image_crop_width'=>$width,'image_crop_height'=>$height, 'responsive'=> true); ?>
									    <div class="rp-img">
									    	<?php amp_loop_image($args); ?>
									    </div>
									    <div class="rp-cnt">
										    <?php amp_loop_title(); ?>
									    </div>
									</div>
								<?php endwhile; amp_loop('end'); ?>
							<?php wp_reset_postdata(); ?>
						</div>
					<?php } ?>
				</div>
 			</div>
 		</div>
 	</div>
<?php } // single desing 2 ended 
if ( $redux_builder_amp['single-design-type'] == '3') { ?>
<div class="sd-3 sgl">
	<div class="sd-3-wrp">
		<div class="fg-img">
			<?php if ( isset($redux_builder_amp['swift-featued-image']) && $redux_builder_amp['swift-featued-image'] && ampforwp_has_post_thumbnail() ) { ?>
				<?php amp_featured_image();?>
			<?php }?>
		</div>
		<div class="artl-cntn">
			<?php amp_title(); ?>
			<?php if ( isset($redux_builder_amp['enable-excerpt-single']) && $redux_builder_amp['enable-excerpt-single']){?>
				<div class="exc">
				   <?php amp_excerpt(20); ?>
			    </div>
			<?php } ?>
			
			<div class="pt-info">
				<div class="athr-info">
                  
                    <?php if ( isset($redux_builder_amp['amp-author-name']) && $redux_builder_amp['amp-author-name']){?>
                      <?php if( $redux_builder_amp['amp-translator-by-text'] ){ ?>
                    <span><?php echo $redux_builder_amp['amp-translator-by-text']; ?></span>
                    <?php } ?>
					<?php amp_author_box(); ?>
					<?php } ?>
					<span class="athr-ptd"><?php amp_date(array('custom_format' => 'F j, Y'));?></span>
				</div>
				
				<div class="soc-shr">
					<ul>
					<?php if($redux_builder_amp['enable-single-facebook-share']){?>
					<li>
						<a class="s_fb" target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-twitter-share']){?>
					<li>
						<a class="s_tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
						</a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-gplus-share']){?>
					<li>
						<a class="s_gp" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-email-share']){?>
					<li>
						<a class="s_em" target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-pinterest-share']){
						$thumb_id = $image = '';
						if (has_post_thumbnail( ) ){
								$thumb_id = get_post_thumbnail_id(get_the_ID());
							$image = wp_get_attachment_image_src( $thumb_id, 'full' );
							$image = $image[0]; 
							}?>
					<li>
						<a class="s_pt" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo $image; ?>&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-linkedin-share']){?>
					<li>
						<a class="s_lk" target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-whatsapp-share']){?>
					<li>
						<a class="s_wp" target="_blank" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-vk-share']){?>
					<li>
						<a class="s_vk" target="_blank" href="http://vk.com/share.php?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
					<li>
						<a class="s_od" target="_blank" href="https://ok.ru/dk?st.cmd=addShare&st._surl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-reddit-share']){?>
					<li>
						<a class="s_rd" target="_blank" href="https://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-tumblr-share']){?>
					<li>
						<a class="s_tb" target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-telegram-share']){?>
					<li>
						<a class="s_tg" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-digg-share']){?>
					<li>
						<a class="s_dg" target="_blank" href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-stumbleupon-share']){?>
					<li>
						<a class="s_su" target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-wechat-share']){?>
					<li>
						<a class="s_wc" target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/wechat/offer?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-viber-share']){?>
					<li>
						<a class="s_vb" target="_blank" href="viber://forward?text=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if ( isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
					<li>
						<a class="s_ym" target="_blank" href="http://www.yummly.com/urb/verify?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&yumtype=button"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['ampforwp-facebook-like-button']){?>
					<li>
						<amp-facebook-like width=90 height=28
		 					layout="fixed"
		 					data-size="large"
		    				data-layout="button_count"
		    				data-href="<?php echo esc_url(get_the_permalink());?>">
						</amp-facebook-like>
					</li>
					<?php } ?>
					</ul>
				</div>
			</div>
			
			<div class="pt-cntn">
				<?php amp_content(); ?>
			</div>
			<?php if( true == $redux_builder_amp['ampforwp-tags-single'] && amp_tags_list()){ ?>
	            <div class="tags">
	            	<?php amp_tags_list();?>
	            </div>
            <?php } ?>
			<div class="scl-shr-btns">
				<ul>
					<?php if($redux_builder_amp['enable-single-facebook-share']){?>
					<li>
						<a class="s_fb" target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-twitter-share']){?>
					<li>
						<a class="s_tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
						</a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-gplus-share']){?>
					<li>
						<a class="s_gp" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-email-share']){?>
					<li>
						<a class="s_em" target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-pinterest-share']){
						$thumb_id = $image = '';
						if (has_post_thumbnail( ) ){
								$thumb_id = get_post_thumbnail_id(get_the_ID());
							$image = wp_get_attachment_image_src( $thumb_id, 'full' );
							$image = $image[0]; 
							}?>
					<li>
						<a class="s_pt" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo $image; ?>&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-linkedin-share']){?>
					<li>
						<a class="s_lk" target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-whatsapp-share']){?>
					<li>
						<a class="s_wp" target="_blank" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-vk-share']){?>
					<li>
						<a class="s_vk" target="_blank" href="http://vk.com/share.php?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
					<li>
						<a class="s_od" target="_blank" href="https://ok.ru/dk?st.cmd=addShare&st._surl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-reddit-share']){?>
					<li>
						<a class="s_rd" target="_blank" href="https://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-tumblr-share']){?>
					<li>
						<a class="s_tb" target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-telegram-share']){?>
					<li>
						<a class="s_tg" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-digg-share']){?>
					<li>
						<a class="s_dg" target="_blank" href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-stumbleupon-share']){?>
					<li>
						<a class="s_su" target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-wechat-share']){?>
					<li>
						<a class="s_wc" target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/wechat/offer?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-viber-share']){?>
					<li>
						<a class="s_vb" target="_blank" href="viber://forward?text=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if ( isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
					<li>
						<a class="s_ym" target="_blank" href="http://www.yummly.com/urb/verify?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&yumtype=button"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['ampforwp-facebook-like-button']){?>
					<li>
						<amp-facebook-like width=90 height=28
		 					layout="fixed"
		 					data-size="large"
		    				data-layout="button_count"
		    				data-href="<?php echo esc_url(get_the_permalink());?>">
						</amp-facebook-like>
					</li>
					<?php } ?>
				</ul>
			</div>
             <?php if ( isset($redux_builder_amp['amp-author-description']) && $redux_builder_amp['amp-author-description']){?>
			<div class="pt-authr-info">
				<?php amp_author_box( 
					array(	'avatar'=>true,
							'avatar_size'=>82,
							'author_description'=>true,
							'author_prefix'=> ampforwp_translation( $redux_builder_amp['amp-translator-by-text'], 'By' ))
					); ?>
			</div>
            <?php } ?>
            <?php
            if ( isset($redux_builder_amp['ampforwp-single-related-posts-switch']) && $redux_builder_amp['ampforwp-single-related-posts-switch'] ) {
			 $my_query = ampforwp_related_post_loop_query();
				if( $my_query->have_posts() ) { ?>
				  	<div class="srp">
				  		<?php ampforwp_related_post(); ?>
			            <ul class="clearfix">
					        <?php
					          while( $my_query->have_posts() ) {
					            $my_query->the_post();
					        ?>
					        <li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
					            <div class="rlp-image">
						            <?php if ( true == $redux_builder_amp['ampforwp-single-related-posts-image'] ) { ?>     
						                <?php ampforwp_get_relatedpost_image('full',array('image_crop'=>'true','image_crop_width'=>350,'image_crop_height'=>190) );?>
									<?php } ?>
									<?php $argsdata = array(
											'show_author' => false,
											'show_excerpt' =>false
												);
									ampforwp_get_relatedpost_content($argsdata); ?> 
								</div>
								<div class="rp-cnt">
								    <span class="athr-nm"><?php echo $redux_builder_amp['amp-translator-by-text']; ?><?php amp_author_box(); ?></span>
	                                <span class="athr-dt"><?php amp_date(array('custom_format' => 'F j, Y'));?></span>
						    	</div>
					        </li><?php
					        } ?>
                        </ul>
                    </div>
				   <?php } ?>
		    <?php wp_reset_postdata(); }?>
		     <?php if ( isset($redux_builder_amp['ampforwp-swift-recent-posts']) && $redux_builder_amp['ampforwp-swift-recent-posts']){?>
			<div class="rc-p">

				<h3><?php echo ampforwp_translation($redux_builder_amp['amp-translator-recent-text'], 'Recent Posts' ); ?></h3>
					<?php while( amp_loop('start', array( 'posts_per_page' => 6 ) ) ): ?>
						<div class="rp">
							<?php
							$width 	= 350;
							$height = 190;
							if( true == $redux_builder_amp['ampforwp-homepage-posts-image-modify-size'] ){
								$width 	= $redux_builder_amp['ampforwp-swift-homepage-posts-width'];
								$height = $redux_builder_amp['ampforwp-swift-homepage-posts-height'];
							}
							 $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'full','image_crop'=>'true','image_crop_width'=>$width,'image_crop_height'=>$height, 'responsive'=> true); ?>
						    <div class="rp-img">
						    	<?php amp_loop_image($args); ?>
						    	<?php amp_loop_title(); ?>
						    </div>
						    <div class="rp-cnt">
							    <span class="athr-nm"><?php echo $redux_builder_amp['amp-translator-by-text']; ?><?php amp_author_box(); ?></span>
                                <span class="athr-dt"><?php amp_date(array('custom_format' => 'F j, Y'));?></span>
						    </div>
						</div>
					<?php endwhile; amp_loop('end'); ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php } ?>
			<div class="cmts">
				<?php amp_comments();?>
				<?php do_action('ampforwp_post_after_design_elements'); ?>
			</div>
        </div><!-- /.artl-cntn -->
	</div><!-- /.sd3-wrap -->
</div><!-- /.sd-3 -->
<?php } //single design 3 ended.
if ( $redux_builder_amp['single-design-type'] == '5') { ?>
	<div class="sd-5 sgl">
		<div class="cntr">
			<div class="a-c">
	            <?php amp_categories_list();?>
	            <?php amp_title(); ?>
	            <?php if( true == $redux_builder_amp['enable-excerpt-single'] ){ ?>
				<div class="exc">
				   <?php amp_excerpt(20); ?>
			    </div>
				<?php } ?>
				<div class="athr-info">
                    <?php if ( isset($redux_builder_amp['amp-author-name']) && $redux_builder_amp['amp-author-name']){?>
                      <?php if( $redux_builder_amp['amp-translator-by-text'] ){ ?>
                    	<span><?php echo $redux_builder_amp['amp-translator-by-text']; ?></span>
                    <?php } ?>
						<?php amp_author_box(); ?>
					<?php } ?>
				</div>
				<span class="athr-ptd"><?php amp_date(array('custom_format' => 'F j, Y'));?></span>
	        </div><!-- /.a-c -->
	        <div class="fg-img">
				<?php if ( isset($redux_builder_amp['swift-featued-image']) && $redux_builder_amp['swift-featued-image'] && ampforwp_has_post_thumbnail() ) { ?>
					<?php amp_featured_image();?>
				<?php }?>
			</div>
			<div class="pt-cntn">
				<?php amp_content(); ?>
			</div>
			<div class="s-a">
	            <?php if(!checkAMPforPageBuilderStatus(get_the_ID())){ ?>
					<?php if( $redux_builder_amp['amp-author-description'] ) { ?>
						<?php amp_author_box( 
											array(	'avatar'=>true,
													'avatar_size'=>60,
													'author_description'=>true)
											); ?>
					<?php } ?>
					<?php amp_post_navigation();?>
					
				<?php } ?>
			</div>
			<?php
            if ( isset($redux_builder_amp['ampforwp-single-related-posts-switch']) && $redux_builder_amp['ampforwp-single-related-posts-switch'] ) {
			$my_query = ampforwp_related_post_loop_query();
		  	if( $my_query->have_posts() ) { $r_count = 1;?>
		  	<div class="s-rp">
		  		<span class="b-l"></span>
		  		<div class="rl-t">
		  			<?php ampforwp_related_post(); ?>
		  		</div>
	            <ul class="clearfix">
			        <?php
			          while( $my_query->have_posts() ) {
			            $my_query->the_post();
			        ?>
			        <li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
			        	<?php if ( true == $redux_builder_amp['ampforwp-single-related-posts-image'] ) { ?>
				            <div class="rlp-image">     
				                 <?php ampforwp_get_relatedpost_image('full',array('image_crop'=>'true','image_crop_width'=>220,'image_crop_height'=>134) );?>
							</div>
						<?php } ?>	
						<div class="rlp-cnt">
							<?php $argsdata = array(
									'show_author' => false,
									'show_excerpt' =>false
										);
							ampforwp_get_relatedpost_content($argsdata); ?>
							<div class="rp-e">
						    	<?php amp_excerpt(14); ?>
						    </div>
						    <span class="athr-nm"><?php echo $redux_builder_amp['amp-translator-by-text']; ?><?php amp_author_box(); ?>
							</span> 
				        </div>
			        </li>
			        <?php do_action('ampforwp_between_related_post',$r_count);
         					$r_count++;
			        }
			      } ?>
  				</ul>
  			</div>
            <?php wp_reset_postdata(); } ?>
			<div class="cmts">
				<?php amp_comments();?>
				<?php do_action('ampforwp_post_after_design_elements'); ?>
			</div>
			<?php if ( isset($redux_builder_amp['ampforwp-swift-recent-posts']) && $redux_builder_amp['ampforwp-swift-recent-posts']){?>
			<div class="rc-p">
				<span class="b-l"></span>
				<div class="rp-t">
					<h3><?php echo ampforwp_translation($redux_builder_amp['amp-translator-recent-text'], 'MOST POPULAR' ); ?></h3>
				</div>
					<?php while( amp_loop('start', array( 'posts_per_page' => 6 ) ) ): ?>
						<div class="rp">
							<?php
							$width 	= 350;
							$height = 190;
							if( true == $redux_builder_amp['ampforwp-homepage-posts-image-modify-size'] ){
								$width 	= $redux_builder_amp['ampforwp-swift-homepage-posts-width'];
								$height = $redux_builder_amp['ampforwp-swift-homepage-posts-height'];
							}
							 $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'full','image_crop'=>'true','image_crop_width'=>$width,'image_crop_height'=>$height, 'responsive'=> true); ?>
						    <div class="rp-img">
						    	<?php amp_loop_image($args); ?>
						    </div>
						    <div class="rp-cnt">
						    	<?php amp_tags_list();?>
						    	<?php amp_loop_title(); ?>
						    	<div class="rp-e">
						    		<?php amp_excerpt(14); ?>
						    	</div>
							    <span class="athr-nm"><?php echo $redux_builder_amp['amp-translator-by-text']; ?><?php amp_author_box(); ?>
							    </span>
						    </div>
						</div>
					<?php endwhile; amp_loop('end'); ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php } ?>
		</div><!-- /.cntr -->
	</div><!-- /.sd-5 -->
<?php }// Single 5 End
if ( $redux_builder_amp['single-design-type'] == '6') { ?>
<div class="sd-6 sgl">
	<div class="fg-img">
		<span class="ovl"></span>
		<div class="s-tlt">
			<div class="at-nm">
				<?php amp_author_box(); ?>
				<?php amp_date(array('custom_format' => 'F  Y'));?>
			</div>
			<?php amp_title(); ?>
		</div><!-- /.s-tlt -->
	</div><!-- /.fg-img -->
	<div class="s-cnt">
		<div class="cntr">
			<div class="pt-cntn">
				<ul class="s-scl">
					<?php if($redux_builder_amp['enable-single-facebook-share']){?>
					<li>
						<a class="s_fb" target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-twitter-share']){?>
					<li>
						<a class="s_tw" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
						</a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-gplus-share']){?>
					<li>
						<a class="s_gp" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-email-share']){?>
					<li>
						<a class="s_em" target="_blank" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-pinterest-share']){
						$thumb_id = $image = '';
						if (has_post_thumbnail( ) ){
								$thumb_id = get_post_thumbnail_id(get_the_ID());
							$image = wp_get_attachment_image_src( $thumb_id, 'full' );
							$image = $image[0]; 
							}?>
					<li>
						<a class="s_pt" target="_blank" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo $image; ?>&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-linkedin-share']){?>
					<li>
						<a class="s_lk" target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-whatsapp-share']){?>
					<li>
						<a class="s_wp" target="_blank" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-vk-share']){?>
					<li>
						<a class="s_vk" target="_blank" href="http://vk.com/share.php?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
					<li>
						<a class="s_od" target="_blank" href="https://ok.ru/dk?st.cmd=addShare&st._surl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-reddit-share']){?>
					<li>
						<a class="s_rd" target="_blank" href="https://reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-tumblr-share']){?>
					<li>
						<a class="s_tb" target="_blank" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-telegram-share']){?>
					<li>
						<a class="s_tg" target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-digg-share']){?>
					<li>
						<a class="s_dg" target="_blank" href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-stumbleupon-share']){?>
					<li>
						<a class="s_su" target="_blank" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-wechat-share']){?>
					<li>
						<a class="s_wc" target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/wechat/offer?url=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['enable-single-viber-share']){?>
					<li>
						<a class="s_vb" target="_blank" href="viber://forward?text=<?php the_permalink(); ?>"></a>
					</li>
					<?php } ?>
					<?php if ( isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
					<li>
						<a class="s_ym" target="_blank" href="http://www.yummly.com/urb/verify?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&yumtype=button"></a>
					</li>
					<?php } ?>
					<?php if($redux_builder_amp['ampforwp-facebook-like-button']){?>
					<li>
						<amp-facebook-like width=90 height=28
		 					layout="fixed"
		 					data-size="large"
		    				data-layout="button_count"
		    				data-href="<?php echo esc_url(get_the_permalink());?>">
						</amp-facebook-like>
					</li>
					<?php } ?>
				</ul>
				<div class="exc">
				   <?php amp_excerpt(20); ?>
			    </div>
			    <div class="sa-cn">
					<?php amp_content(); ?>
				</div>
			</div><!-- /.pt-cnt -->
			<div class="s-a">
	            <?php if(!checkAMPforPageBuilderStatus(get_the_ID())){ ?>
					<?php if( $redux_builder_amp['amp-author-description'] ) { ?>
						<?php amp_author_box( 
											array(	'avatar'=>true,
													'avatar_size'=>60,
													'author_description'=>true)
											); ?>
					<?php } ?>
					<?php amp_post_navigation();?>
					
				<?php } ?>
			</div>
			<?php
            if ( isset($redux_builder_amp['ampforwp-single-related-posts-switch']) && $redux_builder_amp['ampforwp-single-related-posts-switch'] ) {
			$my_query = ampforwp_related_post_loop_query();
		  	if( $my_query->have_posts() ) { $r_count = 1;?>
		  	<div class="s-rp">
		  		<span class="b-l"></span>
		  		<div class="rl-t">
		  			<?php ampforwp_related_post(); ?>
		  		</div>
	            <ul class="clearfix">
			        <?php
			          while( $my_query->have_posts() ) {
			            $my_query->the_post();
			        ?>
			        <li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
			        	<?php if ( true == $redux_builder_amp['ampforwp-single-related-posts-image'] ) { ?>
				            <div class="rlp-image">     
				                 <?php ampforwp_get_relatedpost_image('full',array('image_crop'=>'true','image_crop_width'=>378,'image_crop_height'=>213) );?>
							</div>
						<?php } ?>
							<?php amp_author_box(); ?>
							<div class="rlp-cnt">
								<?php $argsdata = array(
										'show_author' => false,
										'show_excerpt' =>false
											);
								ampforwp_get_relatedpost_content($argsdata); ?>
					        </div>
			        </li>
			        <?php do_action('ampforwp_between_related_post',$r_count);
         					$r_count++;
			        }
			      } ?>
  				</ul>
  			</div>
            <?php wp_reset_postdata(); } ?>
			<?php if ( isset($redux_builder_amp['ampforwp-swift-recent-posts']) && $redux_builder_amp['ampforwp-swift-recent-posts']){?>
			<div class="rc-p">
				<span class="b-l"></span>
				<div class="rp-t">
					<h3><?php echo ampforwp_translation($redux_builder_amp['amp-translator-recent-text'], 'MOST POPULAR' ); ?></h3>
				</div>
					<?php while( amp_loop('start', array( 'posts_per_page' => 6 ) ) ): ?>
						<div class="rp">
							<?php
							$width 	= 350;
							$height = 190;
							if( true == $redux_builder_amp['ampforwp-homepage-posts-image-modify-size'] ){
								$width 	= $redux_builder_amp['ampforwp-swift-homepage-posts-width'];
								$height = $redux_builder_amp['ampforwp-swift-homepage-posts-height'];
							}
							 $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'full','image_crop'=>'true','image_crop_width'=>$width,'image_crop_height'=>$height, 'responsive'=> true); ?>
						    <div class="rp-img">
						    	<?php amp_loop_image($args); ?>
						    </div>
						    <div class="rp-cnt">
							    <?php amp_author_box(); ?>
							    <?php amp_loop_title(); ?>
							    </span>
						    </div>
						</div>
					<?php endwhile; amp_loop('end'); ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php } ?>
			<div class="cmts">
				<?php amp_comments();?>
				<?php do_action('ampforwp_post_after_design_elements'); ?>
			</div>
		</div><!-- /.cntr -->
	</div><!-- /.s-cnt -->
</div><!-- /.sd-6 -->
<?php }// single page 6 End
}//Function closed ampforwp_singlepage_design_type