<?php
add_filter( 'redux/options/redux_builder_amp/sections', 'ampforwp_layouts_config_extend',7,1 );
function ampforwp_layouts_config_extend($sections){
			$menuTypeOption =	array(
				        'alt'=>' Menu overlay 2 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/menu-2.png'
				        );
			$menuTypeOption3 =	array(
				        'alt'=>' Menu overlay 3 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/menu-3.png'
				        );
			$menuTypeOption4 =	array(
				        'alt'=>' Menu overlay 4 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/menu-4.png'
				        );
			$footerTypeOption =	array(
                        'alt'=>' Footer Design 2 ',
                        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/footer-2.png'
                        );
			$footerTypeOption1 =	array(
                        'alt'=>' Footer Design 3 ',
                        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/footer-3.png'
                        );
			$footerTypeOption4 =	array(
                        'alt'=>' Footer Design 4 ',
                        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/footer-4.png'
                        );
			$singleDesignType = array(
				        'alt'=>' Single Design 2 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/single-2.png'
				        );
			$singleDesignType3 = array(
				        'alt'=>' Single Design 3 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/single-3.png'
				        );
			$singleDesignType5 = array(
				        'alt'=>' Single Design 5 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/single-4.png'
				        );
			$singleDesignType6 = array(
				        'alt'=>' Single Design 6 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/single-5.png'
				        );
			$headerdesign4 = array(
				        'alt'=>' Header Design 4 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/header-4.png'
				        );
			$headerdesign5 = array(
				        'alt'=>' Header Design 5 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/header-5.png'
				        );
			$headerdesign6 = array(
				        'alt'=>' Header Design 6 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/header-6.png'
				        );
			$headerdesign7 = array(
				        'alt'=>' Header Design 7 ',
				        'img' =>AMPFORWP_LAYOUT_DIR_URI.'/images/header-7.png'
				        );
			
			foreach ($sections as $key => $section_value) {
	            	if(count($section_value['fields'])>0){
	            		foreach ($section_value['fields'] as $fieldkey => $field_value) {

	            			if($field_value['id']=='menu-type'){
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $menuTypeOption);
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $menuTypeOption3);
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $menuTypeOption4);
	            			}
	            			
	            			if($field_value['id']=='footer-type'){
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $footerTypeOption);
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $footerTypeOption1);
	            				array_push($sections[$key]['fields'][$fieldkey]['options'], $footerTypeOption4);
	            			}
	            			if($field_value['id']=='single-design-type'){
	            				$sections[$key]['fields'][$fieldkey]['options'][2] = $singleDesignType;
	            				$sections[$key]['fields'][$fieldkey]['options'][3] = $singleDesignType3;
	            				$sections[$key]['fields'][$fieldkey]['options'][5] = $singleDesignType5;
	            				$sections[$key]['fields'][$fieldkey]['options'][6] = $singleDesignType6;
                              
	            			}
	            			if($field_value['id']=='header-type'){
	            				
								$sections[$key]['fields'][$fieldkey]['options'][4] = $headerdesign4;
	            				$sections[$key]['fields'][$fieldkey]['options'][5] = $headerdesign5;
	            				$sections[$key]['fields'][$fieldkey]['options'][6] = $headerdesign6;
	            				$sections[$key]['fields'][$fieldkey]['options'][7] = $headerdesign7;
	            			}

	            		}
	            	}
	            	
	            
	        }

	       //print_r($sections);die;
	return $sections;
}

