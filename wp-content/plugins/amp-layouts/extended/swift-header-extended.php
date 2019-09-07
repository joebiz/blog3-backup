<?php
add_action('ampforwp_advance_header_layout_options', 'ampLayout_option_add_header_type');
function ampLayout_option_add_header_type(){
	global $redux_builder_amp;
 	if ( isset($redux_builder_amp['header-type']) && '4' == $redux_builder_amp['header-type'] ) { ?>
		<header class="header h_m h_m_1">
		    <input type="checkbox" id="offcanvas-menu" class="tg" />
		    <div class="hamb-mnu">
		        <aside class="m-ctr">
		            <div class="menu-heading clearfix">
		                <label for="offcanvas-menu" class="c-btn"></label>
		            </div><!--end menu-heading-->
		            <nav class="m-menu">
		               <?php amp_menu(); ?>
		            </nav><!--end slide-menu -->
		        </aside><!--end menu-container-->
		        <label for="offcanvas-menu" class="fsc"></label>
		        <div class="cntr">
		            <div class="head h_m_w">
		            	<div class="logo">
		                    <?php amp_logo(); ?>
		                </div><!-- /.logo -->
		                <div class="d_menu">
		               		<?php amp_menu(); ?>
		               	</div>
		                <div class="h-nav">
		                    <label for="offcanvas-menu" class="t-btn"></label>
		                </div><!--end menu-->
		                <?php if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
		                    <div class="h-srch h-ic">
		                        <a class="lb icon-search" href="#search"></a>
		                        <div class="lb-btn"> 
		                            <div class="lb-t" id="search">
		                               <?php amp_search();?>
		                               <a class="lb-x" href="#"></a>
		                            </div> 
		                        </div>
		                    </div><!-- /.search -->
		                <?php } ?>
		                <?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
		                <?php if( $redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '1'){ ?>
		                <div class="h-cta cta-1">
		                    <a href="<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_link'];?>">
		                        <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_text'];?>
		                    </a>
		                </div>
		                <?php } }?>
		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		    <?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
		    <?php if( $redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '2'){ ?>
		    <div class="h-cta cta-2">
		    	<a href="<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_link'];?>">
		    		<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_text'];?>
		    	</a>
		    </div>
		    <?php } }?>
		</header>
	<?php }

// Header Type 5 Start 
	if ( isset($redux_builder_amp['header-type']) && '5' == $redux_builder_amp['header-type'] ) { ?>
		<header class="header h_m h_m_1">
			<div class="cntr">
				<div class="logo lg-1">
	                <?php amp_logo(); ?>
	            </div><!-- /.logo -->
	        </div>
		    <input type="checkbox" id="offcanvas-menu" class="tg" />
		    <div class="hamb-mnu">
		        <aside class="m-ctr">
		            <div class="menu-heading clearfix">
		                <label for="offcanvas-menu" class="c-btn"></label>
		            </div><!--end menu-heading-->
		            <nav class="m-menu">
		               <?php amp_menu(); ?>
		            </nav><!--end slide-menu -->
		            <?php if ( true == $redux_builder_amp['menu-social'] ) { ?>
	                <div class="m-s-i om-s">
	                    <ul>
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
	                <?php } ?>
	                <?php if ( has_nav_menu( 'amp-footer-menu' ) ) { ?>
	                <div class="ofm">
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
	            </div><!-- /.m-srl -->
		        </aside><!--end menu-container-->
		        <label for="offcanvas-menu" class="fsc"></label>
		        <div class="cntr">
		            <div class="head h_m_w">
		            	<?php if ( true == $redux_builder_amp['menu-social'] ) { ?>
		            	<div class="m-s-i h-s-i">
		                    <ul>
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
                		<?php } ?>
		                <div class="d_menu">
		               		<?php amp_menu(); ?>
		               	</div>
		               	<div class="logo lg-2">
			                <?php amp_logo(); ?>
			            </div><!-- /.logo -->
		                <div class="h-nav">
		                    <label for="offcanvas-menu" class="t-btn"></label>
		                </div><!--end menu-->
		                <?php if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
		                    <div class="h-srch h-ic">
		                        <a class="lb icon-search" href="#search"></a>
		                        <div class="lb-btn"> 
		                            <div class="lb-t" id="search">
		                               <?php amp_search();?>
		                               <a class="lb-x" href="#"></a>
		                            </div> 
		                        </div>
		                    </div><!-- /.search -->
		                <?php } ?>
		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		</header>
	<?php } // Header Type 5 Ends

// Header Type 6 Start 
	if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
		<header class="header h_m h_m_1">
		    <input type="checkbox" id="offcanvas-menu" class="tg" />
		    <div class="hamb-mnu">
		        <aside class="m-ctr">
		            <div class="menu-heading clearfix">
		                <label for="offcanvas-menu" class="c-btn"></label>
		            </div><!--end menu-heading-->
		            <nav class="m-menu">
		               <?php amp_menu(); ?>
		            </nav><!--end slide-menu -->
		        </aside><!--end menu-container-->
		        <label for="offcanvas-menu" class="fsc"></label>
		        <div class="cntr">
		            <div class="head h_m_w">
		            	<div class="h-nav">
		                    <label for="offcanvas-menu" class="t-btn"></label>
		                </div><!--end menu-->
		            	<div class="logo">
		                    <?php amp_logo(); ?>
		                </div><!-- /.logo -->
		                <div class="d_menu h-6">
		               		<?php amp_menu(); ?>
		               	</div>
		                <?php if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
		                    <div class="h-srch h-ic">
		                        <a class="lb icon-search" href="#search"></a>
		                        <div class="lb-btn"> 
		                            <div class="lb-t" id="search">
		                               <?php amp_search();?>
		                               <a class="lb-x" href="#"></a>
		                            </div> 
		                        </div>
		                    </div><!-- /.search -->
		                <?php } ?>
		                <?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
		                <?php if( $redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '1'){ ?>
		                <div class="h-cta cta-1">
		                    <a href="<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_link'];?>">
		                        <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_text'];?>
		                    </a>
		                </div>
		                <?php } }?>
		                <div class="clearfix"></div>
		            </div>
		        </div>
		    </div>
		</header>
	<?php } // Header Type 6 Ends

// Header Type 7 Start 
	if ( isset($redux_builder_amp['header-type']) && '7' == $redux_builder_amp['header-type'] ) { ?>
		<header class="header h_m h_m_1">
		    <input type="checkbox" id="offcanvas-menu" class="tg" />
		    <div class="hamb-mnu">
		        <aside class="m-ctr">
		            <div class="menu-heading clearfix">
		                <label for="offcanvas-menu" class="c-btn"></label>
		            </div><!--end menu-heading-->
		            <nav class="m-menu">
		               <?php amp_menu(); ?>
		            </nav><!--end slide-menu -->
		        </aside><!--end menu-container-->
		        <label for="offcanvas-menu" class="fsc"></label>
		        <div class="cntr">
		            <div class="head h_m_w">
		            	<div class="h-nav">
		                    <label for="offcanvas-menu" class="t-btn">
		                    	<?php if( $redux_builder_amp['swift_h7_menulabel'] ){ ?>
		                    		<?php echo $redux_builder_amp['swift_h7_menulabel'];?>
		                    	<?php } ?>
		                    </label>
		                </div><!--end menu-->
		            	<div class="logo">
		                    <?php amp_logo(); ?>
		                </div><!-- /.logo -->
		                <div class="d_menu h-7">
		               		<?php amp_menu(); ?>
		               	</div>
		               	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
		                <?php if( $redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '1'){ ?>
		                <div class="h-cta cta-1">
		                    <a href="<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_link'];?>">
		                        <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_text'];?>
		                    </a>
		                </div>
		                <?php } }?>
		                <div class="clearfix"></div>
		            </div>
		        </div><!-- /.cntr -->
		    </div><!--/ .hamb-menu -->
		</header>

	<?php } // Header Type 7 Ends
} // function closed ampLayout_option_add_header_type