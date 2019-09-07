<?php

add_action("amp_css", 'ampforwp_swift_header_css');
function ampforwp_swift_header_css(){
global $redux_builder_amp;

if ( isset($redux_builder_amp['header-type']) && '4' == $redux_builder_amp['header-type'] ) {?>
	.h_m_w{display:flex;}
	.h-nav{display:none;}
	.d_menu ul li{display:inline-block;position: relative;}
	.d_menu .amp-menu > li a{padding:5px 10px;margin-bottom:0;
	    <?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_color'] ['rgba']){?>
	        color: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4menu_color']['rgba']?>;
	    <?php } ?> 
	}
	.d_menu input{display:none}
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4dropmenu']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4dropmenu'] ) {
	?>
	.d_menu ul li.menu-item-has-children:hover>ul{display:block;z-index:9;}
	.d_menu li a{transition: all 0.3s ease-in-out 0s;}
	.d_menu li ul{background: <?php echo $redux_builder_amp['swift_h4submenu_bgcolor']['rgba']?>;left: 0;min-width: 150px;opacity: 1;position: absolute;top: 100%;transform: translateY(15px);transition: all 0.3s ease-in-out 0s;visibility: hidden;}
	.d_menu li ul li ul{left: 100%;top: 0;}
	.d_menu li:hover > ul{opacity: 1;transform: translateY(0px);visibility: visible;transition: all 0.2s ease-in-out 0s;}
	.d_menu li ul li{display: block;position: relative;}
	.d_menu .amp-menu .sub-menu li a{
		padding: 10px;
		border-bottom: 1px solid <?php echo $redux_builder_amp['swift_h4submenu_bdrcolor']['rgba']?>;
		color:<?php echo $redux_builder_amp['swift_h4submenu_txtcolor']['rgba']?>;
		font-size:<?php echo $redux_builder_amp['swift-head-size'] ?>;
		<?php if($redux_builder_amp['swift_h4submenu_align'] == '1'){?>
			text-align:center;
		<?php } if($redux_builder_amp['swift_h4submenu_align'] == '2'){?>
			text-align:left;
		<?php } if($redux_builder_amp['swift_h4submenu_align'] == '3'){?>
			text-align:right;
		<?php } ?>
	}
	.d_menu ul li.menu-item-has-children > a:after{content: "\e313";font-family: 'icomoon';background-size: 16px;display: inline-block;top: 3px;font-size: 16px;color: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4menu_color']['rgba']?>;position:relative;padding-left: 2px;}
	.d_menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;}
	.d_menu li.menu-item-has-children:hover > a:after{transform:rotate(180deg);right:-2px;}
	.d_menu li ul{box-shadow: 0 6px 18px 0 rgba(46, 50, 60, .09);}
	<?php } else { ?>
		.d_menu ul li .sub-menu, .d_menu ul li.menu-item-has-children:hover>ul{display:none;}
	<?php } // H4 Dropmenu CSS ends?>
	.amp-menu li.menu-item-has-children:after{display:none;}
	.logo{order: -1;align-self: center;}
	.amp-logo{display: block;line-height: 0;}
	.d_menu{flex-grow: 1;align-self: center;letter-spacing: 0.5px;font-size:14px;line-height:1.4;}
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4bxs']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4bxs'] ) {?>
	    .hamb-mnu{box-shadow: 0px 10px 40px 0px rgba(47,47,47,0.1);}
	<?php } ?>
		.h_m{border:none;}
	<?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '1'){?>
		.d_menu .amp-menu{text-align:center;}
	<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '2'){?>
		.d_menu .amp-menu{text-align:left;} 
	<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '3'){?>
		.d_menu .amp-menu{text-align:right;} 
	<?php } ?>
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
	<?php if($redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '2'){?>
	.h-cta{display:inline-block;width:100%;padding:15px 0px;text-align:center;font-size:15px;
	background: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_color']['rgba']?>;
	}
	.h-cta a{color:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_txtcolor']['rgba']?>; }
	<?php } 
	if($redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '1'){ ?>
		.cta-1{align-self: center;letter-spacing: 0.5px;font-size: 15px;margin-left:10px;width:auto;}
		.cta-1 a{
		    border-radius:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdrds']?>px;
		    color:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_txtcolor']['rgba']?>;
		    background: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_color']['rgba']?>;
		    border: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4ctabrdrwd']?>px solid <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdrcolor']['rgba']?>;
		    padding: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-top'] .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-right'] .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-bottom']  .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-left'] ; ?>;
		}
	<?php } 
 	} //Header CTA CSS ends 
	//Header 4
	if($redux_builder_amp['ampforwp_themes_swift_h4cta'] == '1'){ ?>
	    .h-ic{margin:0px 10px 0px 10px;}
	<?php } else{ ?>
		.h-ic{margin:0px 0px 0px 10px;}
	<?php }?>
	<?php if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
		.d_menu{text-align: left;margin-left:40px;}
	<?php } else{ ?>
		.d_menu{text-align: right;}
	<?php }?>
		.amp-logo a{line-height:0;display:inline-block;
	<?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
	    color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
	<?php } ?>}
	@media(max-width:768px){
	    .d_menu{display:none;}
	    .h-nav{display:block;flex-grow: 1;align-self: center;text-align: right;}
	    header .cntr {max-width: 100%;}
	}
	<?php if( true == $redux_builder_amp["amp-rtl-select-option"] ) {?> 
		.d_menu{text-align:left;}
		.cta-1{margin-right:10px;margin-left:0;}
		@media(max-width:768px){
		    .h-nav{text-align:left;}
		    .c-btn {float: left;}
		}
		<?php } // RTL Ends
} //Header Type 4 CSS Ends

//Header Type 5 CSS Starts
if ( isset($redux_builder_amp['header-type']) && '5' == $redux_builder_amp['header-type'] ) { ?>
.h_m_w{margin:7px 0px 6px 0px;}
.h-nav{display:none;}
.d_menu input{display:none}
.d_menu ul li{display:inline-block;position: relative;}
<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4dropmenu']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4dropmenu'] ) {
?>
.d_menu ul li.menu-item-has-children:hover>ul{display:block;z-index:9;}
.d_menu li a{transition: all 0.3s ease-in-out 0s;}

.d_menu li ul{background: #168dff;left: 0;min-width: 200px;opacity: 1;position: absolute;top: 100%;transform: translateY(15px);transition: all 0.3s ease-in-out 0s;visibility: hidden;}
.d_menu li ul li ul{left: 100%;top: 0;}
.d_menu li:hover > ul{opacity: 1;transform: translateY(0px);visibility: visible;transition: all 0.2s ease-in-out 0s;}
.d_menu li ul li{display: block;position: relative;font-size:16px;}
.d_menu .amp-menu .sub-menu li a{padding: 10px;border-bottom: 1px solid #fff;color:#fff;}
.d_menu ul li.menu-item-has-children > a:after{content: "\e313";font-family: 'icomoon';display: inline-block;top: 5px;font-size: 25px;color: #168DFF;position:relative;}

.d_menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;}
.d_menu li.menu-item-has-children:hover > a:after{transform:rotate(180deg);right:0px;}
.d_menu{flex-grow: 1;align-self: center;letter-spacing: 0.5px;
	font-size:22px;font-weight:500;}
<?php } else { ?>
.d_menu{flex-grow: 1;align-self: center;letter-spacing: 0.5px;
	font-size:22px;font-weight:500;overflow-x: auto;overflow-y: hidden;white-space: nowrap;}
.d_menu ul li .sub-menu, .d_menu ul li.menu-item-has-children:hover>ul{display:none;}
<?php } // H4 Dropmenu CSS ends?>
.amp-menu li.menu-item-has-children:after{display:none;}
.logo{text-align: center;}
.amp-logo{display: block;line-height: 0;}
<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4bxs']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4bxs'] ) {?>
    .hamb-mnu{box-shadow: 0px 10px 40px 0px rgba(47,47,47,0.1);}
<?php } ?>

<?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '1'){?>
.d_menu .amp-menu{text-align:center;}
<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '2'){?>
.d_menu .amp-menu{text-align:left;} 
<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '3'){?>
.d_menu .amp-menu{text-align:right;} 
<?php } ?>

<?php if( true == $redux_builder_amp['amp-swift-search-feature'] ){ ?>
.d_menu{text-align: left;margin:0px 30px;}
<?php } else{ ?>
.d_menu{text-align: right;}
<?php }?>
.amp-logo a{line-height:0;display:inline-block;
	<?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
	    color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
	<?php } ?>
}
.lg-1{margin: 3% 0px 2%;}
.h-ic {margin: 0px 0px 1px 10px;}
/** Header Social icons **/
.h-s-i{
	order: -1;
    align-self: center;
    border:none;
    max-width: 150px;
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    padding:10px 0px;
}
.h-s-i li a{
	color:#BBBBBB;
}
.h-s-i li{margin-bottom:0;}
@media(max-width:768px){
    .d_menu{display:none;}
    .h-nav{display:block;flex-grow: 1;align-self: center;text-align: right;}
    .header .cntr{max-width:100%;padding: 0px 10px;}
    .amp-logo amp-img{max-width:200px;}
}
<?php if( true == $redux_builder_amp["amp-rtl-select-option"] ) {?> 
	.d_menu{text-align:left;}
	@media(max-width:768px){
	    .h-nav{text-align:left;}
	}
	<?php } // RTL Ends ?>

<?php } //Header 5 CSS Ends

//Header Type 6 CSS Starts
if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
	.h_m_w{display:flex;}
	.d_menu ul li{display:inline-block;position: relative;}
	.d_menu input{display:none}
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4dropmenu']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4dropmenu'] ) {
	?>
	.d_menu ul li.menu-item-has-children:hover>ul{display:block;z-index:9;}
	.d_menu li a{transition: all 0.3s ease-in-out 0s;}
	.d_menu li ul{background: #fff none repeat scroll 0 0;left: 0;min-width: 200px;opacity: 1;position: absolute;top: 100%;transform: translateY(15px);transition: all 0.3s ease-in-out 0s;visibility: hidden;}
	.d_menu li ul li ul{left: 100%;top: 0;}
	.d_menu li:hover > ul{opacity: 1;transform: translateY(0px);visibility: visible;transition: all 0.2s ease-in-out 0s;}
	.d_menu li ul li{display: block;position: relative;}
	.d_menu .sub-menu li a{padding: 10px;}
	.d_menu ul li.menu-item-has-children > a:after{content: "\e313";font-family: 'icomoon';background-size: 16px;display: inline-block;top: 3px;font-size: 16px;color: rgba(0,41,96,1);position:relative;padding-left: 5px;line-height:0;}
	.d_menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;}
	.d_menu li.menu-item-has-children:hover > a:after{transform:rotate(180deg);right:-5px;}
	<?php } else { ?>
		.d_menu ul li .sub-menu, .d_menu ul li.menu-item-has-children:hover>ul{display:none;}
	<?php } // H4 Dropmenu CSS ends?>
	.amp-menu li.menu-item-has-children:after{display:none;}
	.logo{align-self: center;padding-left:25px}
	.amp-logo{display: block;line-height: 0;}
	.d_menu{flex-grow: 1;align-self: center;font-size:18px;line-height:1.4;font-weight: 500;margin-left:30px;}
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4bxs']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4bxs'] ) {?>
	    .hamb-mnu{box-shadow: 0px 10px 40px 0px rgba(47,47,47,0.1);}
	<?php } ?>
		.h_m{border:none;}
	<?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '1'){?>
		.d_menu .amp-menu{text-align:center;}
	<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '2'){?>
		.d_menu .amp-menu{text-align:left;} 
	<?php } if($redux_builder_amp['ampforwp_themes_swift_h4menu_position'] == '3'){?>
		.d_menu .amp-menu{text-align:right;} 
	<?php } ?>

	.h-nav{display:flex;align-items: center;}
	.h-nav:after{
		content:"";
		display:inline-block;
		border-right:1px solid #ebebeb;
		height: 100%;
		padding-left: 23px;
	}
	.d_menu .amp-menu > li a:hover{background:#ebebeb;color:rgba(0,41,96,1);}
	.d_menu .amp-menu > li .sub-menu li a:hover{background:#fff;}
	@media(max-width:768px){
		.h-6{display:none;}
		.h-ic {text-align: right;flex-grow: 1;}
	}

<?php } //Header 6 CSS Ends

//Header Type 7 CSS Starts
if ( isset($redux_builder_amp['header-type']) && '7' == $redux_builder_amp['header-type'] ) { ?>
.h_m_w{ 
	align-items: center;
	height: auto;
	padding:20px 0px;
}
.d_menu input{display:none}
.t-btn{
	display: inline-flex;
    align-items: center;
    <?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
    	color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
	<?php } ?>
}
.t-btn:before {
    content: "\e5d2";
    display: inline-block;
    font-family: "icomoon";
    font-size: 28px;
    <?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
    	color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
	<?php } ?>
    margin-right: 8px;
}
.h-nav .t-btn:after {
	display:none;
}
.logo{
	flex-grow: 1;
    text-align: center;
    color: #fff;
    z-index: 9;
}
.h-nav, .h-cta{
	z-index:0;
}
	.d_menu ul li{display:inline-block;position: relative;}
	.d_menu .amp-menu > li a{padding:5px 10px;margin-bottom:0;
    <?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_color'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4menu_color']['rgba']?>;
    <?php } ?> 
	}
	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4dropmenu']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4dropmenu'] ) {?>
	.d_menu ul li.menu-item-has-children:hover>ul{display:block;z-index:9;}
	.d_menu li a{transition: all 0.3s ease-in-out 0s;}
	.d_menu li ul{background: <?php echo $redux_builder_amp['swift_h4submenu_bgcolor']['rgba']?>;left: 0;min-width: 200px;opacity: 1;position: absolute;top: 100%;transform: translateY(15px);transition: all 0.3s ease-in-out 0s;visibility: hidden;padding:10px 0px;font-size:14px;}
	.d_menu li ul li ul{left: 100%;top: 0;}
	.d_menu li:hover > ul{opacity: 1;transform: translateY(0px);visibility: visible;transition: all 0.2s ease-in-out 0s;}
	.d_menu li ul li{display: block;position: relative;}
	.d_menu .amp-menu .sub-menu li a{padding: 10px 20px;color:<?php echo $redux_builder_amp['swift_h4submenu_txtcolor']['rgba']?>}
	.d_menu ul li.menu-item-has-children > a:after{content: "\e313";font-family: 'icomoon';background-size: 16px;display: inline-block;top: 3px;font-size: 16px;color: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4menu_color']['rgba']?>;position:relative;padding-left: 2px;line-height:0;}
	.d_menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;}
	.d_menu li.menu-item-has-children:hover > a:after{transform:rotate(180deg);right:-2px;}
	<?php } else { ?>
		.d_menu ul li .sub-menu, .d_menu ul li.menu-item-has-children:hover>ul{display:none;}
	<?php } // H4 Dropmenu CSS ends?>
	.amp-menu li.menu-item-has-children:after{display:none;}

	<?php if ( isset($redux_builder_amp['ampforwp_themes_swift_h4cta']) && 1 == $redux_builder_amp['ampforwp_themes_swift_h4cta'] ) {?>
	<?php if($redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '2'){?>
	.h-cta{display:inline-block;width:100%;padding:15px 0px;text-align:center;font-size:15px;
	background: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_color']['rgba']?>;
	}
	.h-cta a{color:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_txtcolor']['rgba']?>; }
	<?php } 
	if($redux_builder_amp['ampforwp_themes_swift_h4cta_position_type'] == '1'){ ?>
		.cta-1{align-self: center;letter-spacing: 0.5px;font-size: 15px;margin-left:10px;width:auto;}
		.cta-1 a{
		    border-radius:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdrds']?>px;
		    color:<?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_txtcolor']['rgba']?>;
		    background: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_color']['rgba']?>;
		    border: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4ctabrdrwd']?>px solid <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdrcolor']['rgba']?>;
		    padding: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-top'] .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-right'] .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-bottom']  .' '.$redux_builder_amp['ampforwp_themes_swift_h4cta_brdgpg']['padding-left'] ; ?>;
		}
	<?php } 
 	} //Header CTA CSS ends ?>

@media(max-width:768px){
	header .cntr {max-width: 100%;}
	.h-7, .h-cta{display:none;}
}
<?php } //Header 7 CSS Ends
} // function closed for ampforwp_swift_header_css

/*
* Menu Type 2,3 CSS are Starts
*/
add_action("amp_css", 'ampforwp_swift_menu_2');
function ampforwp_swift_menu_2(){
	global $redux_builder_amp;
	/***** Menu 2 *****/
	 if($redux_builder_amp['menu-type'] == '2'){ ?>
	 .amp-logo a{line-height:0;display:inline-block;
		<?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
	        color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
	    <?php } ?>}
	.m-ctr{
	<?php if($redux_builder_amp['swift-header-overlay']['rgba']){?>
	    background: <?php echo $redux_builder_amp['swift-header-overlay'] ['rgba'] ?>;
	 <?php } ?>
	}
	.tg, .fsc{display: none;}
	.fsc{width: 100%;height: 100%;position: absolute;cursor: pointer;top:0;left:0;}
	<?php if($redux_builder_amp['header-position-type'] == '1'){?>
    	.tg:checked + .hamb-mnu > .m-ctr {margin-left: 0;}
    	.m-ctr{margin-left: -100%;float: left;}
	<?php } ?>
	<?php if($redux_builder_amp['header-position-type'] == '2'){?>
    	.tg:checked + .hamb-mnu > .m-ctr {
    	    margin-left: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);
    	}
    	.m-ctr{margin-left: 100%;float: right;}
	<?php } ?>
	.tg:checked + .hamb-mnu > .fsc{display: block;background: rgba(0,0,0,.5);}
	.t-btn, .c-btn{cursor: pointer;}
	.t-btn:after{content:"\e5d2";display:inline-block;font-family: "icomoon";font-size:28px;
    <?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
        color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
    <?php } ?>
	}
	.c-btn:after{content: "\e5cd";font-family: "icomoon";font-size: 30px;line-height: 0;display: block;text-indent: 1px;
    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
    <?php } ?>
	}
	.c-btn{float: right;padding: 1.5rem;}
	.m-ctr{transition: margin 0.3s ease-in-out;}
	.m-ctr{
    <?php if($redux_builder_amp['header-overlay-width']){?>
        width:<?php echo $redux_builder_amp['header-overlay-width']?>;
    <?php } ?>
    position: absolute;z-index:99;padding: 0% 3% 0 5%;
    margin-top:<?php echo $redux_builder_amp['swift-height-control']?>;
	}
	.m-menu{overflow-y: scroll;max-height: 90vh;}
	::-webkit-scrollbar { display: none; }
	.m-menu ul li.menu-item-has-children:after{display:none;}
	.m-menu .amp-menu li.menu-item-has-children ul {display: block;}
	.m-menu .amp-menu > li > a{font-size:18px;position:relative;display:inline-block;font-weight:600;margin-bottom:15px;font-style: italic;letter-spacing:1px;padding: 6px 0;text-transform: uppercase;}
	.m-menu .amp-menu > li{margin-bottom: 50px;width: 33%;display:inline-block;vertical-align: top;}
	.m-menu .amp-menu > li > a:after {
        background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
        position: absolute;content: "";height: 3px;width: 100%;bottom: 0px;left: 0;opacity: 1;
    }
	.m-menu .sub-menu li a{font-size: 15px;padding:8px 0px;letter-spacing: 0.4px;-webkit-transition: all 0.2s;transition: all 0.2s;-webkit-transition-property: padding-left, color;transition-property: padding-left, color;}
	.m-menu .sub-menu li a:hover {color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;padding-left: 12px;}
	.m-menu .amp-menu li.menu-item-has-children>ul>li {padding-left: 0px;}
	.m-menu{list-style-type: none;margin: 45px 0 0 0;padding: 0;display:inline-block;width:100%;}
	.m-menu .amp-menu{margin-bottom:20%;}
	.amp-menu > li a{
	    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
	        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
	    <?php } ?> 
	    padding: 13px 7px;margin-bottom:0;
    }
	/*** Responsive ***/
	@media(max-width:768px){
    	.m-menu .amp-menu > li{width: 100%;float: none;display:inline-block;}
    	.m-menu {margin: 20px 0 0 0;}
    	.sub-menu li{float:left;width:50%;}
	}
	@media(max-width:425px){
	   .sub-menu li{width:100%;float:none;}
	}
<?php // Menu RTL Styles 
if( true == $redux_builder_amp['amp-rtl-select-option'] ) {?> 
    .h-nav {order: -1;}
    .h-1 {order: 0;}
    .c-btn {float: left;}
    .overlay-search:before{left:0;right:auto;}
    a.lb-x{left:0;right:auto;}
    <?php if($redux_builder_amp['header-position-type'] == '1'){?>
    .tg:checked + .hamb-mnu > .m-ctr {margin-right: 0%;}
    .m-ctr{margin-right: -100%;float: left;}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
    .tg:checked + .hamb-mnu > .m-ctr {
        margin-right: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);
    }
    .m-ctr{margin-right: 100%;float: right;}
<?php } ?>
<?php } //RTL End
	} // Menu 2 CSS Ends Here

 // Menu 3 CSS are Starts
if($redux_builder_amp['menu-type'] == '3'){ ?>
.m-ctr{
<?php if($redux_builder_amp['swift-header-overlay']['rgba']){?>
    background: <?php echo $redux_builder_amp['swift-header-overlay'] ['rgba'] ?>;
 <?php } ?>
}
.tg, .fsc{display: none;}
.fsc{width: 100%;height: 100%;position: absolute;cursor: pointer;top:0;left:0;}
<?php if($redux_builder_amp['header-position-type'] == '1'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: 0;}
.m-ctr{margin-left: -100%;float: left;}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
.tg:checked + .hamb-mnu > .m-ctr {
    margin-left: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);
}
.m-ctr{margin-left: 100%;float: right;}
<?php } ?>
.tg:checked + .hamb-mnu > .fsc{display: block;background: rgba(0,0,0,.5);height:100vh;}
.t-btn, .c-btn{cursor: pointer;}
.t-btn:after{content:"\e5d2";display:inline-block;font-family: "icomoon";font-size:28px;
<?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
    color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
<?php } ?>
}
.m-ctr{position: absolute;z-index:99;padding: 0% 3% 100vh 5%;transition: margin 0.3s ease-in-out;top:0;
    <?php if($redux_builder_amp['header-overlay-width']){?>
        width:<?php echo $redux_builder_amp['header-overlay-width']?>;
    <?php } ?>height:100%;
}
.m-menu{overflow-y: scroll;max-height: 100vh;}
::-webkit-scrollbar { display: none; }
.m-menu ul li.menu-item-has-children:after{display:none;}
.m-menu .amp-menu li.menu-item-has-children ul {display: block;margin-top:7px;}
.m-menu .amp-menu > li > a{font-size:26px;position:relative;display:inline-block;font-weight:bold;letter-spacing:1px;padding:0;text-transform: uppercase;}
.m-menu{list-style-type: none;margin: 0;padding: 0;display:inline-block;width:100%;}
.m-menu .amp-menu{margin-bottom:20%;margin-top:40px;}
.m-menu ul >li{margin-bottom:25px;}
.m-menu ul li ul li{margin-bottom: 0;padding: 5px 0px;}
.m-menu li.menu-item-has-children>ul>li{padding:5px 0px;}
.m-menu .amp-menu > li a{padding:0px;margin-bottom:4px;}
.c-btn:after{content: "\e5cd";font-family: "icomoon";font-size: 30px;line-height: 0;display: block;text-indent: 1px;
    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
    <?php } ?>
}
.c-btn{position: absolute;right: 18px;top: 33px;z-index:9;}
.amp-menu > li a{
    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
    <?php } ?> 
}
@media(max-width:768px){
	.amp-menu > li a{
        <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
            color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
        <?php } ?> 
    }
}
<?php if( true == $redux_builder_amp["amp-rtl-select-option"] ) {?> 
@media(max-width:768px){
    .c-btn {left: 18px;right:auto;}
}
<?php } // RTL Ends
   } //Menu type 3 Ends

//Menu Type 4  CSS Starts
if($redux_builder_amp['menu-type'] == '4'){ ?>
.m-menu .toggle {float :right;}
.m-menu input{display:none}
.m-menu .amp-menu [id^=drop]:checked + label + ul{ display: block;}
.m-menu .amp-menu [id^=drop]:checked + .toggle:after{transform:rotate(360deg);}
.m-menu .toggle:after{content: "\e313";font-family: 'icomoon';background-size: 16px;display: inline-block;top: -10px;padding: 13px 15px;font-size:30px;transform: rotate(270deg);border-radius: 35px;color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;font-weight: 400;position: absolute;left: auto;right: 0;top: 0px;bottom:auto;}
.m-ctr{
<?php if($redux_builder_amp['swift-header-overlay']['rgba']){?>
    background: <?php echo $redux_builder_amp['swift-header-overlay'] ['rgba'] ?>;
 <?php } ?>
}
.tg, .fsc{display: none;}
.fsc{width: 100%;height: 100%;position: absolute;cursor: pointer;top:0;left:0;}
<?php if($redux_builder_amp['header-position-type'] == '1'){?>
.tg:checked + .hamb-mnu > .m-ctr {margin-left: 0;}
.m-ctr{margin-left: -100%;float: left;}
<?php } ?>
<?php if($redux_builder_amp['header-position-type'] == '2'){?>
.tg:checked + .hamb-mnu > .m-ctr {
    margin-left: calc(100% - <?php echo $redux_builder_amp['header-overlay-width']?>);
}
.m-ctr{margin-left: 100%;float: right;}
<?php } ?>
.tg:checked + .hamb-mnu > .fsc{display: block;background: rgba(0,0,0,.5);height:100vh;}
.t-btn, .c-btn{cursor: pointer;}
.t-btn:after{content:"\e5d2";display:inline-block;font-family: "icomoon";
<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
font-size:36px;
<?php } else{ ?>
font-size:28px;
<?php } ?>
<?php if($redux_builder_amp['swift-element-color-control']['rgba']){ ?>
    color: <?php echo $redux_builder_amp['swift-element-color-control']['rgba']?>;
<?php } ?>
}
.m-ctr{position: absolute;z-index:99;
<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
padding: 0% 3% 100vh 3%;
<?php } else {?>
padding: 0% 3% 100vh 5%;
<?php } ?>
transition: margin 0.3s ease-in-out;top:0;height: 100%;
	<?php if($redux_builder_amp['header-overlay-width']){?>
        width:<?php echo $redux_builder_amp['header-overlay-width']?>;
    <?php } ?>
}
.m-menu{overflow-y: scroll;max-height: 100vh;text-align: center;}
::-webkit-scrollbar { display: none; }
.m-menu .amp-menu > li > a{font-size:22px;position:relative;display:inline-block;font-weight:bold;letter-spacing:1px;padding:0px;text-transform: uppercase;}
.m-menu{list-style-type: none;margin: 0;padding: 0;display:inline-block;width:100%;}
.m-menu .amp-menu{;margin-top:15%;}
.d_menu .amp-menu > li a{padding:5px 10px;margin-bottom:0;
    <?php if($redux_builder_amp['ampforwp_themes_swift_h4menu_color'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['ampforwp_themes_swift_h4menu_color']['rgba']?>;
    <?php } ?> 
}
.amp-menu > li a{
    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
    <?php } ?> 
}
.m-menu > ul >li{
	padding:20px 0px;
	border-bottom:<?php echo $redux_builder_amp['swift_hm_bdr_wdth']?> solid; 
	border-color:<?php echo $redux_builder_amp['swift_hm_bdr_clr']['rgba']?>;
}
.m-menu .amp-menu .sub-menu .sub-menu{display:none;}
.m-menu .amp-menu li.menu-item-has-children > ul{margin-top:20px;padding-top: 20px;
	border-top:<?php echo $redux_builder_amp['swift_hm_bdr_wdth']?> solid; 
	border-color:<?php echo $redux_builder_amp['swift_hm_bdr_clr']['rgba']?>;
}
.m-menu ul li ul li{margin-bottom: 0;padding: 5px 0px;}
.m-menu li.menu-item-has-children>ul>li{padding: 8px 0px;font-size: 18px;font-weight: bold;}
.c-btn:after{content: "\e5cd";font-family: "icomoon";font-size: 30px;line-height: 0;display: block;text-indent: 1px;
<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
	color:#fff;
<?php } else {?>
    <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
        color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
    <?php } 
}?>
}
.c-btn{
<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
	position: absolute;
    right: 0px;
    top: 0;
    z-index: 8;
    background: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;
    padding: 30px 22px;
<?php } else { ?>
	position: absolute;left: 18px;top: 33px;z-index:9;
<?php } ?>
}
<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
	.d_menu .amp-menu > li a{padding:28px 15px 27px 15px;}
	.d_menu .amp-menu  li .sub-menu{
		text-align:center;
		box-shadow: 0px 3px 10px 0px #888;
		border-bottom:3px solid <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;
		 padding: 20px 0px;
	}
	.d_menu .amp-menu  li .sub-menu li a{
		padding:10px 15px;
	}
<?php } ?>
.lg-2{display:none;}
/** Social ico CSS **/
.om-s{border:none;margin-top:20px;}

/** Menu Footer  CSS **/
.ofm{max-width:350px;margin:0 auto;text-align:center;padding-top:15px;}
.ofm li{
	display:inline-block;
	font-size:17px;
	line-height:1.4;
	padding: 5px 10px 10px 5px;
	font-weight:bold;
}
.ofm li .sub-menu{display:none;}
.ofm li a{color:#000;}

@media(max-width:768px){
	.amp-menu > li a{
        <?php if($redux_builder_amp['swift-element-overlay-color-control'] ['rgba']){?>
            color: <?php echo $redux_builder_amp['swift-element-overlay-color-control']['rgba']?>;
        <?php } ?> 
    }
    .h-s-i{display:none;}
    .lg-1{display:none;}
    .lg-2{display:flex;align-items: center;}
  	<?php if ( isset($redux_builder_amp['header-type']) && '6' == $redux_builder_amp['header-type'] ) { ?>
  		.m-ctr{width:90%;}
  	<?php } ?>
}

<?php } //Menu type 4 Ends

}//Function Closed "ampforwp_swift_menu_2"
/*
* Footer CSS 2,3 Starts
*/
add_action("amp_css", 'ampforwp_swift_footer_2');
function ampforwp_swift_footer_2(){
	global $redux_builder_amp;
	/** Footer **/
	if ( isset($redux_builder_amp['footer-type']) && '2' == $redux_builder_amp['footer-type'] ) { ?>
	.ftr{background:#000;padding:10px 0px;margin-top:40px;}
	.f-t-2{width:100%;display:inline-block;padding:30px 0px;}
	.f-lg{display: inline-block;vertical-align: middle;margin-right:8%;width:17%;}
	.f-mnu{width: 70%;display: inline-block;vertical-align: middle;}
	.f-mnu ul li{float:left;width:33%;font-size:14px;margin-bottom:15px;}
	.f-mnu ul li a{color:#aaa;}
	.f-mnu .sub-menu{display:none;}
	.rr{padding:20px 0px 10px 0px;border-top:1px solid rgba(255, 255, 255, 0.20);font-size: 12px;}
	.rr a{float:right;}
	.rr, .rr a{color:#aaa;display:block;}
	.rr a:hover{
	  color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;  
	}

	@media(max-width:768px){
    	.f-lg{width:auto;margin-right:4%;}
    	.f-mnu {width: 60%;}
	}
	@media(max-width:600px){
    	.f-lg{width:100%;margin:0;text-align:center;}
    	.f-t-2{padding:20px;}
    	.f-mnu ul li {width: 50%;}
    	.f-mnu {width: 100%;margin-top:20px;padding:0px 30px;}
    	.rr {padding:15px 20px;}
	}
<?php // Footer RTL Styles 
if( true == $redux_builder_amp['amp-rtl-select-option'] ) {?> 
.f-lg {margin-right: 0%;margin-left:8%;}
.rr a {float: left;}
@media(max-width:768px){
    .f-lg{width:auto;margin-left:4%;}
    .f-mnu {width: 60%;}
}
@media(max-width:600px){
    .f-lg{width:100%;margin:0;text-align:center;}
    .f-t-2{padding:20px;}
    .f-mnu ul li {width: 50%;}
    .f-mnu {width: 100%;margin-top:20px;padding:0px 30px;}
    .rr {padding:15px 20px;}
}
<?php } //RTL End
	} //If closed footer-type = 2
if ( isset($redux_builder_amp['footer-type']) && '3' == $redux_builder_amp['footer-type'] ) { ?>
.ftr{background:#000;width:100%;display:inline-block;padding:50px 0px;margin-top:20px;}
.f-logo{margin-bottom:20px;}
.f-menu{padding-top: 30px;border-top: 1px solid rgba(255,255,255,.2);font-size: 16px;line-height:2;}
.f-menu .sub-menu{display:none;}
.f-menu li{display:inline-block;margin-right:10px;}
.f-menu li a{color:#aaa;}
<?php if($redux_builder_amp['enable-single-facebook-share']){?>
.s_fb{color:#fff;}
.s_fb:after{content: "\e92d";}
<?php } 
if($redux_builder_amp['enable-single-twitter-share']){?>
.s_tw:after{content: "\e942";}
<?php } 
if($redux_builder_amp['enable-single-gplus-share']){?>
.s_gp:after{content: "\e931";}
<?php } 
if($redux_builder_amp['enable-single-linkedin-share']){?>
.s_lk:after{content: "\e934";}
<?php }
if($redux_builder_amp['enable-single-pinterest-share']){?>
.s_pt:after{content:"\e937";}
<?php } 
if($redux_builder_amp['enable-single-email-share']){?>
.s_em:after{content: "\e930";}
<?php }
if($redux_builder_amp['enable-single-whatsapp-share']){?>
.s_wp:after{content: "\e946";}
<?php } 
if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
.s_od:after{content: "\e936";}
<?php } 
if($redux_builder_amp['enable-single-vk-share']){?>
.s_vk:after{content: "\e944";}
<?php } 
if($redux_builder_amp['enable-single-reddit-share']){?>
.s_rd:after{content: "\e938";}
<?php } 
if($redux_builder_amp['enable-single-tumblr-share']){?>
.s_tb:after{content: "\e940";}
<?php } 
if($redux_builder_amp['enable-single-telegram-share']){?>
.s_tg:after{content: "\e93f";}
<?php } 
if($redux_builder_amp['enable-single-digg-share']){?>
.s_dg:after{content: "\e919";}
<?php }
if($redux_builder_amp['enable-single-stumbleupon-share']){?>
.s_su:after{content: "\e93e";}
<?php }
if($redux_builder_amp['enable-single-wechat-share']){?>
.s_wc:after{content: "\e945";}
<?php } 
if($redux_builder_amp['enable-single-viber-share']){?>
.s_vb:after{content: "\e943";}
<?php }
if(isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
.s_ym:after{content: "\e948";}
<?php } ?>
.socl-ico{width: 100%;display: inline-block;margin-top: 50px;}
.socl-ico span{width: 100%;color: #f1f1f1;display: inline-block;font-size: 13px;text-align: center;font-weight: 600;letter-spacing: 0.5px;padding-bottom:25px;border-bottom:1px solid rgba(255,255,255,.2);}
.socl-ico ul li a{border-radius:100%;background-color: rgba(255,255,255,.2);position:relative;color:#fff;padding:10px;font-size:20px;transition: all 0.3s ease-in-out 0s;display:inline-block;}
.socl-ico li a:hover{
	background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;
}
.socl-ico ul li{font-family: 'icomoon';list-style-type:none;display:inline-block;}
.s_stk{background: #f1f1f1;display:inline-block;width: 100%;padding:0;position:fixed;bottom: 0;text-align: center;border: 0;z-index:1;}
.socl-shr{width:100%;display:inline-block;margin-top:30px;text-align:center;}
.socl-shr li{margin-right:10px;}
.s_stk li a{margin:0;border-radius: 0;padding:12px;}
.rr {margin: 50px 0px 15px 0px;display: inline-block;text-align:center;width:100%;color:rgba(255,255,255,.5);font-size:13px;}
.rr a{color: rgb(255, 255, 255);text-decoration: underline;margin-left: 4px;}
<?php }//If closed footer-type = 3

if ( isset($redux_builder_amp['footer-type']) && '4' == $redux_builder_amp['footer-type'] ) { ?>
.foot-1{
	width:100%;
	display:inline-block;
	<?php if( $redux_builder_amp['swift-footer-bg']['rgba'] ) {?>
		background:<?php echo $redux_builder_amp['swift-footer-bg']['rgba']?>; 
	<?php } ?>
		font-size: <?php echo $redux_builder_amp['swift-footer1-cntnsize']?>; 
	    line-height: 1.5;
    <?php if( $redux_builder_amp['swift-footer-txt-clr']['rgba'] ) {?>
		color: <?php echo $redux_builder_amp['swift-footer-txt-clr']['rgba'] ?>;
	<?php } ?>
	padding:<?php
	if(isset($redux_builder_amp['ftr1-gapping'])){
		echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-top'];
		echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-right'];
		echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-bottom'];
		echo ' ' . $redux_builder_amp['ftr1-gapping']['padding-left'];
	} ?>
}
.f-t-2{
	display: grid;
    grid-template-columns: 3fr 1fr 1fr;
    grid-gap: 40px;
    margin-top:40px;
}
.f-mnu ul li a{
	color:#fff;
	font-size:18px;
	line-height: 1.2;
	margin-bottom:15px;
	display: inline-block;
}
.w-bl h4{
<?php if( $redux_builder_amp['swift-footer-heading-clr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-heading-clr']['rgba'] ?>;
<?php } ?>
}
.w-bl a{
<?php if( $redux_builder_amp['swift-footer-link-clr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-link-clr']['rgba'] ?>;
<?php } ?>
}
.w-bl a:hover{
<?php if( $redux_builder_amp['swift-footer-link-hvr']['rgba'] ) {?>
	color: <?php echo $redux_builder_amp['swift-footer-link-hvr']['rgba'] ?>;
<?php } ?>
}
.w-bl p{
    margin-bottom:15px;
}
/** Social Icons **/
.foot-soc ul li a:after {float: left;}
.foot-soc{width: 100%;display: inline-block;}
.foot-soc ul li{font-family: 'icomoon';list-style-type:none;display:block;margin-bottom: 15px;}
.foot-soc ul li a{color:#fff;font-size:15px;transition: all 0.3s ease-in-out 0s;background: transparent}
<?php if($redux_builder_amp['enbl-fb']){?>
.foot-soc .s_fb:before{
	content:"Facebook";
}
<?php }
if($redux_builder_amp['enbl-tw']){?>
.foot-soc .s_tw:before{
	content:"Twitter";
}
<?php }
if($redux_builder_amp['enbl-gol']){?>
.foot-soc .s_gp:before{
	content:"Goolge";
}
<?php }
if($redux_builder_amp['enbl-lk']){?>
.foot-soc .s_lk:before{
	content:"LinkedIn";
}
<?php }
if($redux_builder_amp['enbl-pt']){?>
.foot-soc .s_pt:before{
	content:"Pinterest";
}
<?php }
if($redux_builder_amp['enbl-yt']){?>
.foot-soc .s_yt:before{
	content:"Youtube";
}
<?php }
if($redux_builder_amp['enbl-inst']){?>
.foot-soc .s_inst:before{
	content:"Instagram";
}
<?php }
if($redux_builder_amp['enbl-vk']){?>
.foot-soc .s_vk:before{
	content:"VKontakte";
}
<?php }
if($redux_builder_amp['enbl-rd']){?>
.foot-soc .s_rd:before{
	content:"Reddit";
}
<?php }
if($redux_builder_amp['enbl-tbl']){?>
.foot-soc .s_tbl:before{
	content:"Tumblr";
}
<?php } ?>
.fs:before {   
	font-size: 18px;
    padding-left: 15px;
    line-height: 1.2;
}
.fs:after{
	color:#00adef;
	position: relative;
    top: 4px;
    transition: all 0.3s ease-in-out 0s;
}
.foot-soc ul li a:hover:after{
	color:#2f71a8;
}
.f-mnu li .sub-menu{display:none;} 
/** Option form css **/
.em-alr{
	padding-right:60px;
}
.amp-optin-form-wrapper{
	width:100%;
	background-color: #2f4b6c;
    padding: 34px 38px 38px;
    margin:0;
}
.amp-optin-form-wrapper h3{
	font-size: 27px;
    font-style: italic;
    color: #fff;
    margin-bottom: 15px;
    font-weight: 400;
}
.amp-optin-form-wrapper p{
	font-size: 18px;
    line-height: 1.2;
    margin:0;
    color: rgba(255, 255, 255, 0.7019607843137254);
}
.f-t-2 .optin-msg{
	margin-bottom:20px;
}
.f-t-2 form input{
	width: 60%;
    background: #213752;
    font-size: 17px;
    color: #fff;
    padding:13px;
    border-radius: 2px;
    margin:0;
}
.amp-optin-form-wrapper .form-submit{
	width: 35%;
    border-radius: 2px;
    padding:13px;
    margin: 0px 0px 0px 13px;
    text-transform: uppercase;
    cursor: pointer;
    letter-spacing: 0.6px;
    background-color:#00adef;
    transition: all 0.3s ease-in-out 0s;
    font-size: 17px;
    font-weight: 500;
}
.amp-optin-form-wrapper .form-submit:hover{
	background-color: #2f71a8
}
.rr{
	<?php if( $redux_builder_amp['swift-footer2-bg']['rgba'] ) {?>
		background:<?php echo $redux_builder_amp['swift-footer2-bg']['rgba']?>;
	<?php } ?>
	padding:<?php
	if(isset($redux_builder_amp['ftr2-gapping'])){
		echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-top'];
		echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-right'];
		echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-bottom'];
		echo ' ' . $redux_builder_amp['ftr2-gapping']['padding-left'];
	}
	?>;
    text-align: center;
    color:#fff;
    font-size: <?php echo $redux_builder_amp['swift-footer2-fntsize']?>;
    width:100%;
    margin:0;
}
.rr a{
	color:#fff;
}
.rr a:before{
	content:"|";
	display:inline-block;
	padding: 0px 10px;
}

/** Responsive **/
@media(max-width:768px){
	.amp-optin-form-wrapper {
	    padding: 30px 30px 30px;
	}
	.em-alr {
	    padding-right: 0px;
	}
}
@media(max-width:480px){
.f-t-2 {
    grid-template-columns: 1fr;
}
}
<?php }//If closed footer-type = 4

} //Function closed "ampforwp_swift_footer_2"


add_action("amp_css", 'ampforwp_single_page_design_2');
function ampforwp_single_page_design_2(){
	global $redux_builder_amp;
	/*** Single ***/
	if($redux_builder_amp['single-design-type'] == '2' && is_single()){
		if( 1 == $redux_builder_amp['ampforwp-bread-crumb'] ) { ?>
		/** Breadcrumbs **/
			.breadcrumb{width: 100%;display: inline-block;padding-bottom: 8px;border-bottom: 1px solid #eee;margin-bottom: 20px;}
			.breadcrumb ul li{display: inline-block;list-style-type: none;font-size: 10px;text-transform: uppercase;margin-right: 5px;}
			.breadcrumb ul li a{color: #999;letter-spacing: 1px;}
			.breadcrumb ul li a:hover{color:#005be2;}
			.item-home:after{content: "\e315";display: inline-block;color: #bdbdbd;font-family: 'icomoon';padding-left: 5px;font-size: 12px;position: relative;top: 1px;}
		<?php } ?>

		/** single **/
		.shr-txt, .athr-tx, .r-pf h3, .amp-tags > span:nth-child(1), .amp-related-posts-title, .post-date, .related-title{display: block;}
		.shr-txt, .athr-tx, .r-pf h3, .amp-related-posts-title, .post-date, .related-title{text-transform: uppercase;font-size: 12px;color: #666;font-weight: 400;}
		.shr-txt, .athr-tx, .amp-related-posts-title, .related-title, .r-pf h3 {margin-bottom: 12px;}
		.sd-2{margin-top: 20px;width:100%;display: inline-block;}
		.amp-category span a, .amp-category span {color: #000;font-weight: bold;text-transform: uppercase;font-style:italic;}
		.amp-post-title {font-size: 50px;line-height: 1.2;margin: 15px 0 10px 0;font-weight: 900;}
		.exc {font-size: 19px;color: #313131;line-height: 1.45;}
		.amp-author {width:100%;display:inline-block;margin: 5px 0 15px 0;}
		.amp-author-image, .author-details {display:inline-block;vertical-align:middle;}
		.author-details, .author-details a{color: #444;font-weight: normal;font-size: 14px;}
		.artl-atr .author-details, .artl-atr .author-details a{font-weight: bold;}
		.artl-atr .amp-author {margin: 15px 0 18px 0;}
		.amp-featured-image{width:100%;}
		.artl{width: 100%;display: inline-flex;margin-bottom: 30px;}
		.lft{display: flex;width: 70%;flex-direction: column;padding-right:3%;}
		.amp-author-image amp-img {border-radius: 50%;margin: 0px 7px 0px 0px;border: 1px solid #ccc;}
		.cntn-wrp {font-size: 18px;color: #000;line-height: 1.7;margin-top:20px;}
		.cntn-wrp a{margin:10px 0px;display:inline-block;color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;}
		.cntn-wrp p {margin: 0px 0px 30px 0px;}
		.amp-category span:nth-child(1) {display: none;}
		.amp-category span:after {content: "/";display: inline-block;margin: 0px 2px 0px 7px;color: rgba(0, 0, 0, 0.25);}
		.amp-category span:last-child:after{display:none;}
		.swift-sticky-social {width: 100%;bottom: 0;display: block;left: 0;box-shadow: 0px 4px 7px #000;background: #fff;position: fixed;margin: 0;z-index: 10;text-align: center;}
		
        /** Single social **/
		.ss-shr ul{display: inline-flex;align-items: center;margin-bottom:20px;}
		.ss-shr ul li {display: inline-block;font-size: 20px;margin-right: 15px;list-style-type: none;font-family: icomoon;}
		.ss-shr li a {color: #fff;padding: 5px;border-radius: 3px;margin:0px;display: inline-block;}
		.ss-shr .s_fb{background:#3b5998;}

		/** post pagination **/
		#pagination {margin-top: 10px;border-top: 1px dotted #ccc;padding: 20px 5px 0px 5px;font-size: 16px;line-height: 24px;font-weight: 400;}
		.prev span {text-transform: uppercase;font-size: 12px;color: #666;display: block;position: absolute;top: -26px;}
		.next span {text-transform: uppercase;font-size: 12px;color: #666;display: block;font-weight: 400;position: absolute;top: -26px;right: 0;}
		.prev:after {border-left: 1px dotted #ccc;content: "";height: calc(100% - -10px);right: -50px;position: absolute;top: 50%;transform: translate(0px, -50%);width: 2px;}
		.next a, .prev a {color: #333;}
		.next:hover a, .prev:hover a {color: <?php echo $redux_builder_amp['swift-color-scheme']['color']; ?>;}
		.prev {float: left;width: 45%;position: relative;margin-top: 10px;}
		.next {float: right;width: 45%;text-align: right;position: relative;margin-top: 10px;}
		.cat-aud{font-size: 16px;line-height:1.4}
		.cat-aud .amp-category, .cat-aud .author-details{display:inline-block;vertical-align:middle;}
		.cat-aud .author-details{color: #757575;font-weight: 400;font-size: 12px;position: relative;margin-left: 5px;top: -1px;}
		.cat-aud .loop-date{display:inline-block;}
        /** Comments **/
		<?php if( true == $redux_builder_amp['wordpress-comments-support'] ){ ?>
			.cmts {width: 100%;display: inline-block;clear: both;margin-top: 30px;}
		<?php } ?>
		.cmts h3 {margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;font-weight: 400;letter-spacing: 0.5px;text-transform: uppercase;color: #777;}
		.cmts ul {margin-top: 16px;}
		.cmts ul li {list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
		.comment-meta amp-img {float: left;margin-right: 10px;border-radius: 50%;}
		.cmts .comment-metadata {font-size: 11px;margin-top: 8px;}
		.cmts .comment-author.vcard .fn {font-size: 12px;font-weight: 500;color: #333;}
		.cmts .comment-author.vcard .says {display: none;}
		.cmts .comment-metadata a {color: #999;}
		.comment-content {margin-top: 6px;width: 100%;display: inline-block;}
		.comment-content p {font-size: 14px;color: #333;line-height: 22px;font-weight: 400;margin: 0;}
		.amp-comment-button {font-size: 15px;float: none;width: 100%;margin: 0 auto;text-align: center;border-radius: 3px;font-weight: 600;width: 250px;background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
		.amp-comment-button a {color: #fff;display: block;padding: 7px 0px 8px 0px;}

	    /** article info **/
		.artl-atr{margin-top: 30px;border-top: 1px solid #d8d8d8;}
		.artl-atr .amp-author .amp-author-image {float:left;}
		.artl-atr .author-details {display:block;}
		.artl-atr .author-name{color: #424242;font-size: 14px;font-weight: 700;margin-bottom:10px;display:inline-block;}
		.artl-atr .author-details p{font-size: 12px;letter-spacing: .6px;line-height: 16px;color: #424242;font-weight:400;}
	
        /** Tags **/
		.amp-tags{margin-top:30px;}
		.amp-tags > span:nth-child(1), .amp-related-posts-title{font-weight: 700;color: #777;font-size: 12px;text-transform: uppercase;margin-bottom:10px;}
		<?php if( $redux_builder_amp['ampforwp-archive-support'] ) { ?>
			.amp-tag a{padding: 6px 12px;margin: 5px 5px 5px 0;text-decoration: none;font-size: .9375rem;letter-spacing: .4px;border-radius: 50px;display: inline-block;color: #9c9c9c;border: 1px solid #9c9c9c;}
		<?php } else {?>
			.amp-tag{padding: 6px 12px;margin: 5px 5px 5px 0;text-decoration: none;font-size: .9375rem;letter-spacing: .4px;border-radius: 50px;display: inline-block;color: #9c9c9c;border: 1px solid #9c9c9c;}
		<?php } ?>

	    <?php //Related posts
	    if ( isset($redux_builder_amp['ampforwp-single-related-posts-switch']) && $redux_builder_amp['ampforwp-single-related-posts-switch'] ) { ?>
	    .srp{text-align: center;margin-bottom: 40px;width:100%;}
	    .srp ul li{list-style-type: none;text-align:left;}
		.rlp-image > a{
		    width: 20%;
		    float: left;
		    margin-right: 15px;
		}
		.srp h3{text-align: center;font-size: 16px;padding: 5px 15px;font-style: italic;background: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;color: #fff;position: relative;letter-spacing: 1px;text-transform: uppercase;margin-bottom: 23px;font-weight:700;display:inline-block;}
		.srp h3:before {top: -1px;left: -1px;border-top: 1.9em solid #fff;border-right: .4em solid transparent;content: '';position: absolute;width: 0;height: 0;}
		.srp h3:after {bottom: -1px;right: -1px;border-bottom: 1.9em solid #fff;border-left: .4em solid transparent;content: '';position: absolute;width: 0;height: 0;}
		.srp .related_link a:hover {text-decoration: underline;}
		.srp .related_link a {color: #000;}
		.srp .related_link{
		    font-size: 17px;
		    font-weight: normal;
		    line-height: 1.4;
		}
		.srp .has_thumbnail{
		    width: 100%;
		    display: inline-block;
		    margin-bottom: 15px;
		    padding-bottom: 15px;
		    border-bottom: 1px solid #e5e5e5;
		}
		<?php } //Related posts CSS Ends ?>

	    /** right sidebar  css **/
		.rft{width:30%;}
		<?php //Recent Post
		if ( isset($redux_builder_amp['ampforwp-swift-recent-posts']) && $redux_builder_amp['ampforwp-swift-recent-posts']){?>
		.rc-p {width:100%;display:inline-block;text-align:center;}
		.rc-p .loop-wrapper{margin:0;text-align: left;}
		.rp{width: 100%;display: inline-block;margin-bottom: 15px;padding-bottom: 15px;border-bottom: 1px solid #e5e5e5;}
		.rp:last-child{border-bottom:none;margin:0;padding:0;}
		.rc-p h3{text-align: center;font-size: 16px;padding: 5px 15px;font-style: italic;background: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;color: #fff;position: relative;letter-spacing: 1px;text-transform: uppercase;margin-bottom: 23px;font-weight:700;display:inline-block;}
		.rc-p h3:before {top: -1px;left: -1px;border-top: 1.9em solid #fff;border-right: .4em solid transparent;content: '';position: absolute;width: 0;height: 0;}
		.rc-p h3:after {bottom: -1px;right: -1px;border-bottom: 1.9em solid #fff;border-left: .4em solid transparent;content: '';position: absolute;width: 0;height: 0;}
		.rp-img{width:20%;float:left;margin-right:15px;}
		.rp-cnt h2{font-size:17px;font-weight:normal;line-height:1.4;}
		.rp-cnt h2 a{color:#000;}
		.rp-cnt h2 a:hover{text-decoration:underline;}
		<?php } // Recent Post CSS Ends ?>

		@media(max-width:768px){
			.artl {width: 100%;display: inline-block;}
			.lft{width:100%;padding:0;}
			.rp-img {width: 10%;}
			.amp-post-title {font-size: 42px;}
			.rft {width: 100%;margin-top: 40px;}
		}
		@media(max-width:767px){
			.swift-sticky-social .amp-social {width: 100%;}
			.amp-social ul{display:inline-flex;width:100%;}
			.swift-sticky-social .amp-social ul a {display: flex;flex-direction: column;flex: 1 0 100%;width: auto;flex-basis: 0;-webkit-box-flex: 1;}	
		}
		@media(max-width:425px){
			.cntr{width:100%;padding:0 20px;}
			.cat-aud .amp-category{margin-right:5px;}
			.cat-aud .author-details{margin-left:0;}
			.amp-category span a, .amp-category span {font-size: 14px;}
			.exc, .cntn-wrp {font-size: 16px;}
			.amp-post-title {font-size: 30px;}
			.rl-p{display:inline-block;}
			.rl-p .has_thumbnail{flex: 1 0 100%;margin: 0px 0px 30px 0px;}
			#pagination {margin: 20px 0px 10px 0px;}
			.next, .prev {float: none;width: 100%;}
			.next a {margin-bottom: 45px;display: inline-block;}
			.rp-img {width: 20%;}
			.rp-cnt h2 {font-size: 15px;}
			.ss-shr ul{display:inline-block;}
			.ss-shr ul li{margin-bottom:10px;}
		}
		<?php // Single  RTL Styles 
		if( true == $redux_builder_amp['amp-rtl-select-option'] ) { ?> 
		.lft {padding-right: 0%;padding-left:3%;}
			.artl-atr .amp-author .amp-author-image{float: right;margin-left: 12px;}
			.amp-tag a, .amp-tag{margin: 5px 0px 5px 5px;}
		<?php } // Single RTL Ends
	} // single design 2  CSS ended
	if ( $redux_builder_amp['single-design-type'] == '3' && is_single()) { ?>
		.sd-3{width:100%;display:inline-block;margin:0 auto;background: #fafafa;padding-top:19px;}
		.sd-3-wrp{width:768px;margin:0 auto;border: solid 1px rgba(209,209,209,.4);box-shadow: 0 1px 2px -1px rgba(0,0,0,.08);}
		.artl-cntn{width:100%;padding:0px 40px 40px;display:inline-block;background:#fff;}
		.amp-post-title{font-size: 2.125rem;color: #fff;line-height:1.75;position:relative;top:-24px;display:inline;-webkit-box-decoration-break: clone;word-wrap: break-word;
			background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;;
			box-shadow: 8px 1px 0 3px <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>, -8px 1px 0 3px <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
        }
		.pt-info{width:100%;display:inline-block;padding-bottom:20px;border-bottom:1px solid #ddd;}
		.amp-author, .athr-ptd{display:inline-block;}
        .pt-authr-info .amp-author{width:100%} 
		.athr-info{color: #000;font-size: .875rem;line-height: 1.6;display:inline-block;position:relative;top:4px;}
		.soc-shr{display:inline-block;float:right;}
		.soc-shr ul{display:inline-flex;}
		.soc-shr ul li{display:inline-block;font-size: 24px;margin-right:20px;list-style-type:none;font-family:icomoon;}
		.soc-shr ul li:last-child{margin-right:0;}
		.soc-shr ul li a{color: #000;background: transparent;display: inline-block;vertical-align: middle;transform: perspective(1px) translateZ(0);box-shadow: 0 0 1px transparent;transition-duration: 0.15s;transition-property: transform;}
		.soc-shr ul li a:hover{transform: scale(1.2);}
		.author-name a{    font-weight: bold;color: #000;}
    	.loop-date:before{content:"|";display: inline-block;padding: 0px 5px 0px 3px;}
	    .pt-cntn{font-size: 18px;line-height: 1.6;color:#333;padding:0px 0px 20px 0;border-bottom: 1px solid #e5e5ea;}
		.pt-cntn p{margin-top:20px;}
		.pt-cntn h2, .pt-cntn h3, .pt-cntn h1{font-size:28px;}
		.pt-cntn blockquote{margin: 1.75rem auto;padding:35px 0px;border-top: 2px solid #e5e5ea;border-bottom: 2px solid #e5e5ea;text-align: center;position:relative;}
		.pt-cntn blockquote p{margin:0;font-size: 24px;line-height: 1.5;}
		.pt-cntn blockquote:before{position: absolute;left:0;right:0;margin:0 auto;display: block;content: "\e244";color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;font-size: 50px;background: #fafafa;font-family:icomoon;width: 70px;height: 50px;line-height: 1;top: -26px;}
		.amp-tags{margin-top:30px;font-size: 13px;}
		.amp-tags .amp-tag{margin: 0px 7px;}
		.amp-tags a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
		.scl-shr-btns{width:100%;display:inline-block;padding:25px 0px;border-bottom: 1px solid #e5e5ea;	}
		.scl-shr-btns ul{display:inline-flex;width:100%;flex-wrap:wrap;}
		.scl-shr-btns li{margin:0px 5px 9px 0px;list-style-type:none;flex-direction: column;flex-basis: 0;flex: 1 0 5%;max-width: calc(100% - 10px);display: flex;}
		.scl-shr-btns a:after{font-family:icomoon;}
		.scl-shr-btns li:last-child{margin-right:0;}
		.scl-shr-btns a{text-align:center;display:inline-block;padding: 10px 4px 8px;color: #fff;}
		.shr-txt{font-weight:600;font-size:14px;display:inline-block;}
		.scl-shr-btns .s_fb{background-color: #3b5998;}
		.scl-shr-btns a:before{font-size:12px;font-weight:bold;}
		.pt-authr-info{margin:20px 0px;background-color: #f2f5f7;padding:20px;}
		.pt-authr-info amp-img{border-radius:100%;float:left;margin-right:20px;}
		.pt-authr-info .author-details {font-size:15px;line-height:1.5;}
		.pt-authr-info p{margin-top:8px;}
		.pt-authr-info a{border-bottom:1px solid #cfcfd4;padding: 0 4px 2px 4px;}
		.pt-authr-info a:hover{border-bottom:1px solid #000;}
		.ampforwp_post_pagination a {background: #eee;padding: 5px 14px;}
		.rc-p{width:100%;margin-top:40px;}
		.rc-p h3{font-size:18px;padding-bottom:15px;}
		.loop-wrapper{display: flex;flex-wrap: wrap;margin: -15px;}
		.rp{margin: 15px;flex-basis: calc(49.33% - 30px);line-height: 0;border: 1px solid #ededed;display: flex;flex-direction: column;justify-content: space-between;background: #fff;}
		.rp .loop-title{font-size: 18px;padding: 15px 20px 20px 20px;line-height: 1.35;font-weight:600;margin:0;}
		.rp .loop-title a{color: #101010;}
		.rp:hover a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
		.rp-cnt{line-height: 1.4;padding: 0px 20px 20px;font-size: 13px;color: #90949c;}
		.athr-dt{float:right;}
		.athr-dt .loop-date:before{display:none;}
		.athr-nm .author-name a{color:#90949c;font-weight:normal;}

		/** Related posts **/
		.srp{width:100%;display:inline-block;margin-top:20px;}
		.srp h3{font-size: 18px;padding-bottom: 15px;}
		.srp ul{display: flex;flex-wrap: wrap;margin: -15px;}
		.srp .has_thumbnail{margin: 15px;flex-basis: calc(49.33% - 30px);line-height: 0;border: 1px solid #ededed;display: flex;flex-direction: column;justify-content: space-between;background: #fff;}
		.related_link{font-size: 18px;padding: 15px 20px 20px 20px;line-height: 1.35;font-weight: 600;}
		.related_link a{color:#101010;}
		.has_thumbnail:hover .related_link a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
		
        /** Comments **/
		<?php if( true == $redux_builder_amp['wordpress-comments-support'] ){ ?>
		  .cmts {width: 100%;display: inline-block;clear: both;margin-top: 40px;}
		<?php } ?>
		.cmts h3 {margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;font-weight: 400;letter-spacing: 0.5px;text-transform: uppercase;color: #444;}
		.cmts h3:after {content: "";display: block;width: 115px;position: relative;top: 7px;
		    border-bottom: 1px solid <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
        }
		.cmts ul {margin-top: 16px;}
		.cmts ul li {list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
		.comment-meta amp-img {float: left;margin-right: 10px;border-radius: 50%;}
		.comment-content {margin-top: 6px;width: 100%;display: inline-block;}
		.cmts .comment-author.vcard .fn {font-size: 12px;font-weight: 500;color: #333;}
		.cmts .comment-author.vcard .says {display: none;}
		.cmts .comment-metadata {font-size: 11px;margin-top: 8px;}
		.cmts .comment-metadata a {color: #999;}
		.comment-content{font-size: 14px;color: #333;line-height: 1.5;font-weight: 400;margin-top: 6px;width: 100%;display: inline-block;}
		.comment-content p{margin:0;}
		.amp-comment-button {font-size: 15px;float: none;width: 100%;margin: 0 auto;text-align: center;border-radius: 3px;font-weight: 600;width: 250px;
		    background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
		}
		.amp-comment-button a {color: #fff;display: block;padding: 7px 0px 8px 0px;}

		/** Responsive **/
		@media(max-width:768px){
			.sd-3-wrp {width: 100%;}
			.sd-3{padding:0;}
			.amp-post-title {font-size: 28px;}
    	}
    	@media(max-width:425px){
    		.artl-cntn {width: 100%;padding: 0px 25px 40px;}
    		.pt-cntn blockquote{padding: 25px 0px;}
	    	.pt-cntn blockquote p {margin: 0;font-size: 22px;}
			.rp, .srp .has_thumbnail{margin: 15px;flex-basis: calc(100%);}
			.soc-shr {float: none;margin-top: 30px;}
			.soc-shr ul{display:inline-block;}
			.soc-shr ul li{margin-bottom:15px;}
			.soc-shr ul li:last-child{margin-bottom:0px;}
			.scl-shr-btns a {padding: 5px 15px 5px 15px;}
			.scl-shr-btns ul {display: block;text-align:center;}
			.scl-shr-btns .shr-txt{display:none;}
			.scl-shr-btns ul li{display:inline-flex;}
    	}
    	@media(max-width:375px){
	       .artl-cntn{padding: 0px 15px 40px;}
	    }

		<?php // SIngle 3 RTL styles
		if( true == $redux_builder_amp['amp-rtl-select-option'] ) { ?>
			.soc-shr{float:left;}
			.soc-shr ul li:last-child{margin-right:20px;}
			.scl-shr-btns ul li:last-child{margin: 0px 10px 10px 0px;}
			.pt-authr-info amp-img{float:right;}
			.athr-dt {float: left;}
			.comment-meta amp-img {float: right;}
			@media(max-width:425px){
				.soc-shr{float:none;}
				.soc-shr ul li:first-child{margin-right:0;}
			}
<?php   } // Single 3 RTL Ends
	} // // single design 3  CSS ended
	/** Inline Related posts **/
	if ( $redux_builder_amp['single-design-type'] == '5' || $redux_builder_amp['single-design-type'] == '3' ||$redux_builder_amp['single-design-type'] == '6' || $redux_builder_amp['single-design-type'] == '2')  { 
	if( 1 == $redux_builder_amp['ampforwp-inline-related-posts'] ){ ?>
	.related_posts{width: 100%;display: inline-block;margin: 20px 0px 30px;}
	.related-title{display: inline-block;width: 100%;margin-bottom: 10px;font-size: 18px;color: #000;font-weight: bold;}
	.related_posts li{float: left;width: 33%;list-style: none;padding: 0px 8px;}
	.related_posts li a{margin:0;}
	.related_posts .related_link{padding:5px 0px 0px 0px;}
	.related_posts .related_link a{font-size:17px;font-weight: bold;margin:0;}
	.related_posts .related_link p{margin-top:10px;font-size:15px;}
	.related_posts li:hover .related_link a{color:<?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;}
	@media(max-width:425px){
		.related_posts{margin:15px 0px;}
		.related_posts li {float: none;width: 100%;padding:0;margin-bottom:20px;}
    }
	<?php } 
	}//
	//single design 5  CSS Started
if ( $redux_builder_amp['single-design-type'] == '5') { ?>
.sd-5{
	width:100%;
	display:inline-block;
	margin-top:20px;
}
.a-c{width:100%;text-align:center;margin:25px 0px 40px 0px;}
/** Tags **/
.a-c .amp-category{margin-bottom:15px;}
.a-c .amp-category > span{display:none;}
.a-c .amp-category .amp-cat{display: inline-block;margin-right:20px;}
.a-c .amp-category .amp-cat:last-child{margin-right:0;}
.a-c .amp-cat a{
	color: #fff;
    background: #168DFF;
    padding: 10px 15px;
    font-size: 15px;
    display:inline-block;
    font-weight: 500;
}
.a-c .amp-post-title{
	font-size: 44px;
    line-height: 1.4;
    max-width: 780px;
    margin: 0 auto;
    color: rgba(37, 37, 37, 1);
}
.exc{
	max-width: 545px;
    margin: 15px auto 28px auto;
    font-size: 17px;
    line-height: 1.6;
    font-style: italic;
    color:#333;
}
.athr-info{display:inline-flex;font-size: 15px;font-weight: 500;margin: 0px 0px 15px;color:#000;}
.athr-info > span{text-transform: lowercase;font-style: italic;}
.amp-author{margin-left:7px;}
.amp-author .author-name{text-transform: uppercase;}
.amp-author a{color:#000;}
.athr-ptd{
	font-size: 13px;
    color: rgba(119, 119, 119, 1);
    font-weight: 500;
}
.pt-cntn{font-size:19px;line-height:1.8;padding-top:20px;max-width:750px;margin:0 auto;}
.pt-cntn p{margin-bottom:20px;}
.rc-p, .s-rp{margin-top: 50px;display: inline-block;width: 100%;position:relative;}
.rp-t, .rl-t {
    width: 100%;
    position: absolute;
    top: -12px;
    bottom: auto;
    left: 0;
    margin: 0 auto;
    right: 0;
    text-align: center;
}
.b-l{border-bottom:2px solid #E0E0E0;width:100%;display:inline-block;position:relative;}
.rc-p h3, .rl-t h3{
	display: inline-flex;
    background: #fff;
    padding: 0 30px;
    font-size: 30px;
    line-height: 1.4;
    font-weight: 500;
}
.rc-p .loop-wrapper, .s-rp ul{
	margin-top:50px;
}
.s-rp ul li{list-style-type:none;}
.rp-cnt .amp-tags > span{display:none;}
.rp-cnt .amp-tags .amp-tag{display:inline-block;margin-right:10px;font-size:14px;font-weight:500;}
.rp-cnt .amp-tags{margin-bottom:7px;}
.rp-cnt .amp-tag a{color:rgba(22, 141, 255, 1);}
.rp-cnt .amp-tag:after{
	content:"|";
	display:inline-block;
	color:rgba(22, 141, 255, 1);
	padding-left:12px;
}
.amp-tag:last-child:after{display:none;}
.rp, .s-rp li{
	display: grid;
    width: 100%;
    grid-template-columns: 1fr 2fr;
    grid-gap: 0px 15px;
    text-align: center;
    align-items: center;
    padding-bottom:30px;
    margin-bottom:30px;
    border-bottom:solid 1px rgba(225, 225, 225, 1);
}
.rp-e{font-size:14px;font-style:italic;line-height:1.7;margin-top:6px;color:#444;}
.loop-title, .related_link{
	font-size:25px;
	line-height:1.4;
	font-weight:500;
}
.loop-title a, .related_link a{color:rgba(23, 23, 23, 1);}
.loop-title a:hover, .author-name a:hover, .related_link a:hover{color:rgba(22, 141, 255, 1);}
.athr-nm{
	display: inline-flex;
    margin-top: 10px;
    text-transform: lowercase;
    color: #000;
    font-size: 12px;
}
.s-a .amp-author {
    padding: 20px 20px;
    border-radius: 0;
    background: #f9f9f9;
    border: 1px solid #ececec;
    display: inline-block;
    width: 100%;
}
.s-a .amp-author-image {
    float: left;
}
.s-a .amp-author-image amp-img {
    border-radius: 50%;
    margin: 0px 12px 5px 0px;
    display: block;
}
.s-a .author-name{
	font-size:16px;
}
.s-a .author-details p {
    margin: 0;
    font-size: 13px;
    line-height: 20px;
    color: #666;
    padding-top: 7px;
}
#pagination {
    margin-top: 30px;
    border-top: 1px dotted #ccc;
    padding: 20px 5px 0px 5px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
}
.next {
    float: right;
    width: 45%;
    text-align: right;
    position: relative;
    margin-top: 10px;
}
.prev {
    float: left;
    width: 45%;
    position: relative;
    margin-top: 10px;
}
.prev span {
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    display: block;
    position: absolute;
    top: -26px;
}
.next a, .prev a {
    color: #333;
}
.prev:after {
    border-left: 1px dotted #ccc;
    content: "";
    height: calc(100% - -10px);
    right: -50px;
    position: absolute;
    top: 50%;
    transform: translate(0px,-50%);
    width: 2px;
}
<?php // Comments //
if( true == $redux_builder_amp['wordpress-comments-support'] ){ ?>
.cmts {
    width: 100%;
    display: inline-block;
    clear: both;
    margin-top: 20px;
}
.cmts h3 {
    margin: 0;
    font-size: 12px;
    padding-bottom: 6px;
    border-bottom:  border-bottom: 1px solid <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
    font-weight: 400;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #444;
}
.cmts h3:after {
    content: "";
    display: block;
    width: 115px;
    border-bottom: 1px solid #005be2;
    position: relative;
    top: 7px;
}
.cmts ul {
    margin-top: 16px;
}
.cmts ul li {
    list-style: none;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}
.cmts .comment-author.vcard .fn {
    font-size: 12px;
    font-weight: 500;
    color: #333;
}
.cmts .comment-author.vcard .says {
    display: none;
}
.cmts .comment-metadata {
    font-size: 11px;
    margin-top: 8px;
}
.cmts .comment-metadata a {
    color: #999;
}
.comment-meta amp-img {
    float: left;
    margin-right: 10px;
    border-radius: 50%;
}
.comment-content {
    margin-top: 6px;
    width: 100%;
    display: inline-block;
    font-size: 14px;
    color: #333;
    line-height: 1.4;
    font-weight: 400;
}
.comment-content p {
    margin: 0;
}
.cmts-wrap {
    display: flex;
    width: 100%;
    margin-top: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #eee;
}
.cmts-wrap a {
    color: #333;
}
.cmts .page-numbers {
    margin: 0px 10px;
}
.cmts .prev, .cmts .next {
    margin: 0 auto;
}
.cmts-wrap .current {
    color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
}
.amp-comment-button {font-size: 15px;width: 100%;margin-top:15px;text-align: center;font-weight: 600;}
.amp-comment-button a {color: #fff;display: inline-block;padding: 7px 25px 8px 25px;
 background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
 border-radius: 3px;}
<?php } ?>
@media(max-width:768px){
	.rp-e{display:none;}
}
@media(max-width:480px){
	.rp-t, .rl-t {top: 0px;}
	.athr-nm{font-size:12px;}
	.rp-e{display:none;}
	.rc-p h3, .rl-t h3{font-size:22px;}
	.loop-title, .related_link{font-size:17px;}
	.next, .prev {float: none;width: 100%;}
	.next a {margin-bottom: 45px;display: inline-block;}
}
<?php } //single design 5  CSS ended

if ( $redux_builder_amp['single-design-type'] == '6') { ?>
.sgl{

}
.fg-img{
	background-image:  url('<?php echo get_the_post_thumbnail_url( get_the_ID() ) ?>');
    min-height: 550px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.ovl{
	background: linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(0,0,0,.5) 50%,rgba(0,0,0,.6) 100%);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.s-tlt{
	position: absolute;
    top: auto;
    bottom: 50px;
    color:#fff;
    left:15%;
    right:15%;
    display: grid;
    grid-template-columns: 1fr 5fr;
    align-items: center;
}
.s-cnt{
	background-color:#fff;
	width:100%;
	margin-top: 30px;
}
.s-tlt h1{
	font-size:50px;
	line-height:1.2;
	font-weight:600;
}
.at-nm .amp-author a, .at-nm .amp-author{
	color: #fff;
    font-size: 17px;
    font-style: italic;
    text-decoration: underline;
    font-weight: 500;
}
.at-nm .loop-date{
	font-size: 15px;
    margin-top: 8px;
    font-weight: 400;
}
.pt-cntn{
	width:700px;
	margin:0 auto;
}
.s-scl li{
	font-family: 'icomoon';
    list-style-type: none;
    display: inline-block;
    font-size: 23px;
    margin-right: 15px;
}
.s-scl li a{
	background: transparent;
}
<?php if($redux_builder_amp['enable-single-facebook-share']){?>
.s-scl li .s_fb:after {
    background: #fff;
    color :#3b5998;
}
<?php }
if($redux_builder_amp['enable-single-twitter-share']){?>
.s-scl li .s_tw:after{
	color:#1da1f2;
}
<?php }
if($redux_builder_amp['enable-single-linkedin-share']){?>
.s-scl li .s_lk:after{
	color:#1b86bc;
}
<?php }
if($redux_builder_amp['enable-single-gplus-share']){?>
.s-scl li .s_gp:after {
    color: #dd4b39;
}
<?php }
if($redux_builder_amp['enable-single-email-share']){?>
.s-scl li .s_em:after {
    color: #b7b7b7;
}
<?php }
if($redux_builder_amp['enable-single-pinterest-share']){ ?>
.s-scl li .s_pt:after {
    color: #bd081c;
}
<?php }
if($redux_builder_amp['enable-single-whatsapp-share']){?>
.s-scl li .s_wp:after {
    color: #075e54;
}
<?php }
if($redux_builder_amp['enable-single-vk-share']){?>
.s-scl li .s_vk:after{
    color: #45668e;
}
<?php }
if($redux_builder_amp['enable-single-odnoklassniki-share']){?>
.s-scl li .s_od:after{
    color: #ed812b;
}
<?php }
if($redux_builder_amp['enable-single-reddit-share']){?>
.s-scl li .s_rd:after{
    color: #ff4500;
}
<?php }
if($redux_builder_amp['enable-single-tumblr-share']){?>
.s-scl li .s_tb:after {
    color: #35465c;
}
<?php }
if($redux_builder_amp['enable-single-telegram-share']){?>
.s-scl li .s_tg:after {
    color: #0088cc;
}
<?php }
if($redux_builder_amp['enable-single-digg-share']){?>
.s-scl li .s_dg:after {
    color: #005be2;
}
<?php }
if($redux_builder_amp['enable-single-stumbleupon-share']){?>
.s-scl li .s_su:after{
    color: #eb4924;
}
<?php }
if($redux_builder_amp['enable-single-wechat-share']){?>
.s-scl li .s_wc:after{
    color: #7bb32e;
}
<?php }
if($redux_builder_amp['enable-single-viber-share']){?>
.s-scl li .s_vb:after{
    color: #59267c;
}
<?php }
if ( isset($redux_builder_amp['enable-single-yummly-share']) && $redux_builder_amp['enable-single-yummly-share']){?>
.s-scl li .s_ym:after{
    color: #e26426;
}
<?php } 
if($redux_builder_amp['enable-excerpt-single']){?>
.exc{
	font-size: 24px;
    color: #333;
    line-height: 1.4;
    margin-top: 30px;
    font-weight: 400;
}
<?php } ?>
.sa-cn{
	font-size:20px;
	line-height:1.4;
	color:#111;
	margin-top:50px;
}
<?php if ( isset($redux_builder_amp['ampforwp-dropcap']) && $redux_builder_amp['ampforwp-dropcap'] ) { ?>
.single-post .sa-cn > p:first-of-type::first-letter{
    float: left;
    font-size: 75px;
    line-height: 1;
    padding-right: 8px;
}
<?php } //Drop Cap CSS ends?>
.sa-cn p{
	margin-bottom:30px;
}
.s-a .amp-author {
    padding: 20px 20px;
    border-radius: 0;
    background: #f9f9f9;
    border: 1px solid #ececec;
    display: inline-block;
    width: 100%;
}
.s-a .amp-author-image {
    float: left;
}
.s-a .amp-author-image amp-img {
    border-radius: 50%;
    margin: 0px 12px 5px 0px;
    display: block;
}
.s-a .author-name {
    font-size: 18px;
}
.s-a .author-details p {
    margin: 0;
    font-size: 15px;
    line-height: 20px;
    color: #666;
    padding-top: 7px;
}
#pagination {
    margin-top: 30px;
    border-top: 1px dotted #ccc;
    padding: 20px 5px 0px 5px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
}
.prev {
    float: left;
    width: 45%;
    position: relative;
    margin-top: 10px;
}
.next {
    float: right;
    width: 45%;
    text-align: right;
    position: relative;
    margin-top: 10px;
}
.next a, .prev a {
    color: #333;
}
.prev span, .next span {
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    display: block;
    position: absolute;
    top: -26px;
}
.next span{
	right:0;
}
.prev:after {
    border-left: 1px dotted #ccc;
    content: "";
    height: calc(100% - -10px);
    right: -50px;
    position: absolute;
    top: 50%;
    transform: translate(0px,-50%);
    width: 2px;
}
/** Related posts **/
.s-rp{
	margin-top: 40px;
    display: inline-block;
    width: 100%;
}
.rl-t{
	width: 100%;
    margin-bottom: 20px;
}
.rl-t h3, .rp-t h3{
	font-size: 15px;
    line-height: 1.4;
    color: #00306e;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    font-family: sans-serif;
}
.s-rp li{
	list-style-type:none;
}
.s-rp .clearfix, .rc-p .loop-wrapper{
	grid-gap: 40px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
.clearfix .amp-author, .clearfix .amp-author a, .rp .amp-author, .rp .amp-author a {
	color: #9c9d9d;
    font-size: 14px;
    font-style: italic;
    font-weight: 500;
    margin-top: 15px;
}
.rlp-cnt, .rp-cnt h2{
	margin-top: 8px;
    font-size: 22px;
    line-height: 1.25;
    font-weight: 500;
}
.rlp-cnt a, .rp-cnt a{
	color: #00306e;
}
.rlp-cnt a:hover, .rp-cnt a:hover{
	color: #2f71a8;
}
.rp-t{
	width: 100%;
    margin: 60px 0 30px;
}
/** Comments **/
<?php if( true == $redux_builder_amp['wordpress-comments-support'] ){ ?>
		.cmts {width: 100%;display: inline-block;clear: both;margin: 30px 0px;}
		<?php } ?>
		.cmts h3 {margin: 0;font-size: 12px;padding-bottom: 6px;border-bottom: 1px solid #eee;font-weight: 400;letter-spacing: 0.5px;text-transform: uppercase;color: #777;}
		.cmts ul {margin-top: 16px;}
		.cmts ul li {list-style: none;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;}
		.comment-meta amp-img {float: left;margin-right: 10px;border-radius: 50%;}
		.cmts .comment-metadata {font-size: 12px;margin-top: 8px;}
		.cmts .comment-author.vcard .fn {font-size: 13px;font-weight: 500;color: #333;}
		.cmts .comment-author.vcard .says {display: none;}
		.cmts .comment-metadata a {color: #999;}
		.comment-content {margin-top: 6px;width: 100%;display: inline-block;}
		.comment-content p {font-size: 15px;color: #333;line-height: 22px;font-weight: 400;margin: 0;}
		.amp-comment-button{font-size: 18px;float: none;margin: 0 auto;text-align: center;font-weight: 600;width: 250px;background-color: <?php echo $redux_builder_amp['swift-color-scheme']['color'] ?>;
		border-radius: 50px;}
		.amp-comment-button a{padding: 12px 40px 12px 40px;color:#fff;display: inline-block;}
		.cmts-wrap .next{margin:0;}
<?php if(is_single() && $redux_builder_amp['enable-single-social-icons'] ){?>
.body.single-post{
  padding-bottom:40px;
}
<?php } ?>
/** Responsive **/
@media(max-width:768px){
	.s-tlt{
		left:5%;
		right:5%;
		grid-gap: 20px;
	}
	.s-tlt h1 {
    	font-size: 40px;
    }
    .s-rp .clearfix, .rc-p .loop-wrapper{
	    grid-template-columns: 1fr 1fr;
	}
	.pt-cntn{
		width:100%;
	}
}
@media(max-width:480px){
	.s-tlt{
		grid-template-columns: 1fr;
	}
	.s-rp .clearfix, .rc-p .loop-wrapper{
	    grid-template-columns: 1fr;
	}
	.next, .prev {
	    float: none;
	    width: 100%;
	}
	.next a {
	    margin-bottom: 45px;
	    display: inline-block;
	}
}
<?php } //single design 6  CSS ended
}//ampforwp_single_page_design_2 function Closed