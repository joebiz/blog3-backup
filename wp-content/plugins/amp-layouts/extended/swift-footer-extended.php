<?php
add_action('ampforwp_advance_footer_options', 'ampLayout_option_add_footer_type');

function ampLayout_option_add_footer_type(){
	global $redux_builder_amp;
 if ( isset($redux_builder_amp['footer-type']) && '2' == $redux_builder_amp['footer-type'] ) { ?>
<footer class="ftr">
	<div class="cntr">
		<div class="f-t-2">
			<div class="f-lg">
				 <?php amp_logo(); ?>
			</div>
			<?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
				<div class="f-mnu">
					<nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">
		              <?php
		              $menu = wp_nav_menu( array(
		                  'theme_location' => 'amp-footer-menu',
		                  'link_before'     => '<span itemprop="name">',
		                  'link_after'     => '</span>',
		                  'echo' => false
		              ) );
		              $menu = apply_filters('ampforwp_menu_content', $menu);
		              $sanitizer_obj = new AMPFORWP_Content( $menu, array(), apply_filters( 'ampforwp_content_sanitizers', array( 'AMP_Img_Sanitizer' => array(), 'AMP_Style_Sanitizer' => array(), ) ) );
		              $sanitized_menu =  $sanitizer_obj->get_amp_content();
		              echo $sanitized_menu; ?>
		           </nav>
				</div>
			<?php } ?>
		</div>
		<div class="rr">
			<?php amp_non_amp_link(); ?>
			<?php do_action('amp_footer_link'); ?>
		</div>
	</div>
</footer>
<?php } 
 if ( isset($redux_builder_amp['footer-type']) && '3' == $redux_builder_amp['footer-type'] ) { ?>
<footer class="ftr">
	<div class="cntr">
		<div class="f-logo">
			 <?php amp_logo(); ?>
		</div>
		<?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
			<div class="f-menu">
				<nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">
	              <?php
	              $menu = wp_nav_menu( array(
	                  'theme_location' => 'amp-footer-menu',
	                  'link_before'     => '<span itemprop="name">',
	                  'link_after'     => '</span>',
	                  'echo' => false
	              ) );
	              $menu = apply_filters('ampforwp_menu_content', $menu);
	              $sanitizer_obj = new AMPFORWP_Content( $menu, array(), apply_filters( 'ampforwp_content_sanitizers', array( 'AMP_Img_Sanitizer' => array(), 'AMP_Style_Sanitizer' => array(), ) ) );
	              $sanitized_menu =  $sanitizer_obj->get_amp_content();
	              echo $sanitized_menu; ?>
	           </nav>
			</div>
		<?php } ?>
		<div class="socl-ico">
			<span>CONNECT</span>
				<ul class="socl-shr">
					<?php if($redux_builder_amp['enbl-fb']){?>
                    <li>
                        <a class="s_fb" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-fb-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-tw']){?>
                    <li>
                        <a class="s_tw" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-tw-prfl-url']); ?>">
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-gol']){?>
                    <li>
                        <a class="s_gp" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-gol-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-lk']){?>
                    <li>
                        <a class="s_lk" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-lk-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-pt']){?>
                    <li>
                        <a class="s_pt" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-pt-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-yt']){?>
                    <li>
                        <a class="s_yt" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-yt-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-inst']){?>
                    <li>
                        <a class="s_inst" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-inst-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-vk']){?>
                    <li>
                        <a class="s_vk" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-vk-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-rd']){?>
                    <li>
                        <a class="s_rd" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-rd-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
                    <?php if($redux_builder_amp['enbl-tbl']){?>
                    <li>
                        <a class="s_tbl" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-tbl-prfl-url']); ?>"></a>
                    </li>
                    <?php } ?>
				</ul>
		</div>
		<div class="rr">
			<?php amp_non_amp_link(); ?>
			<?php do_action('amp_footer_link'); ?>
		</div>
	</div>
</footer>
 <?php } 
if ( isset($redux_builder_amp['footer-type']) && '4' == $redux_builder_amp['footer-type'] ) { ?>
<footer class="ftr">
	<div class="foot-1">
		<div class="cntr">
			<div class="f-t-2">
				<div class="em-alr">
					<?php 
						ob_start();
						dynamic_sidebar('swift-footer-widget-area');
						$swift_footer_widget = ob_get_contents();
						ob_end_clean();
						$sanitizer_obj = new AMPFORWP_Content( 
											$swift_footer_widget,
											array(), 
											apply_filters( 'ampforwp_content_sanitizers', 
												array( 'AMP_Img_Sanitizer' => array(), 
													'AMP_Blacklist_Sanitizer' => array(),
													'AMP_Style_Sanitizer' => array(), 
													'AMP_Video_Sanitizer' => array(),
							 						'AMP_Audio_Sanitizer' => array(),
							 						'AMP_Iframe_Sanitizer' => array(
														 'add_placeholder' => true,
													 ),
												) 
											) 
										);
						 $sanitized_footer_widget =  $sanitizer_obj->get_amp_content();
			              echo $sanitized_footer_widget;
					?>
				</div><!-- /. em-alr -->
				<div class="foot-soc">
					<ul class="socl-shr">
						<?php if($redux_builder_amp['enbl-fb']){?>
	                    <li>
	                        <a class="s_fb fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-fb-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-tw']){?>
	                    <li>
	                        <a class="s_tw fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-tw-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-gol']){?>
	                    <li>
	                        <a class="s_gp fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-gol-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-lk']){?>
	                    <li>
	                        <a class="s_lk fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-lk-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-pt']){?>
	                    <li>
	                        <a class="s_pt fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-pt-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-yt']){?>
	                    <li>
	                        <a class="s_yt fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-yt-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-inst']){?>
	                    <li>
	                        <a class="s_inst fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-inst-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-vk']){?>
	                    <li>
	                        <a class="s_vk fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-vk-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-rd']){?>
	                    <li>
	                        <a class="s_rd fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-rd-prfl-url']); ?>"></a>
	                    </li>
	                    <?php } ?>
	                    <?php if($redux_builder_amp['enbl-tbl']){?>
	                    <li>
	                        <a class="s_tbl fs" target="_blank" href="<?php echo esc_url($redux_builder_amp['enbl-tbl-prfl-url']); ?>"></a>
	                    </li>
                    <?php } ?>
					</ul>
				</div><!-- /.foot-soc -->
				<?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
					<div class="f-mnu">
						<nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">
			              <?php
			              $menu = wp_nav_menu( array(
			                  'theme_location' => 'amp-footer-menu',
			                  'link_before'     => '<span itemprop="name">',
			                  'link_after'     => '</span>',
			                  'echo' => false
			              ) );
			              $menu = apply_filters('ampforwp_menu_content', $menu);
			              $sanitizer_obj = new AMPFORWP_Content( $menu, array(), apply_filters( 'ampforwp_content_sanitizers', array( 'AMP_Img_Sanitizer' => array(), 'AMP_Style_Sanitizer' => array(), ) ) );
			              $sanitized_menu =  $sanitizer_obj->get_amp_content();
			              echo $sanitized_menu; ?>
			           </nav>
					</div>
				<?php } ?>
			</div><!-- /.f-t-2 -->
		</div><!-- /.cntr -->
	</div><!-- /.foot-1 -->
	<div class="rr">
		<div class="cntr">
			<?php amp_non_amp_link(); ?>
			<?php do_action('amp_footer_link'); ?>
		</div>
	</div><!-- /. rr -->
</footer>
 <?php }
}//function closed ampLayout_option_add_footer_type