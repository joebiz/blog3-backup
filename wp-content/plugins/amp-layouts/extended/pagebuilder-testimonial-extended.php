<?php 
add_filter("ampforwp_pagebuilder_modules_filter", "ampforwpPagebuilderTestimonialUpdateOptions", 12, 1);
function ampforwpPagebuilderTestimonialUpdateOptions($modules){
	if(isset($modules['testimonial-mod']['fields'])){
            foreach ($modules['testimonial-mod']['fields'] as $key => $value) {
            	if($value['name']=='testimonial_layout_type'){
            		 //testimonial_layout_type update
                    $layoutOption = array(
                        array(
                          'value'=>'2',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/testi-2.png'
                        ),
                    );
                    $modules['testimonial-mod']['fields'][$key]['options_details'] = array_merge($value['options_details'],$layoutOption);
                    }

            }
            $modules['testimonial-mod']['fields'][] = array(
                'type'      =>'text',
                'name'      =>"tst-wth",
                'label'     =>'Testimonial Width',
                'tab'       =>'design',
                'default'   =>'100%',
                'content_type'=>'css',
                'required'  => array('testimonial_layout_type'=>'2')
            );
            $modules['testimonial-mod']['repeater']['front_template'] .= '
            {{if_condition_testimonial_layout_type==2}}
            	<div class="testi-mod-2">
					<div class="testi-cont">
						{{content}}
					</div>
					<div class="auth-info">
						<div class="auth-img">
							{{if_img_upload}}<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" layout="responsive" alt="{{image_alt}}"></amp-img>{{ifend_img_upload}}
						</div>
						<div class="auth-cntn">
							<h5>{{content_title}}</h5>
							<span>{{auth_desig}}</span>
						</div>
					</div>
				</div>
            {{ifend_condition_testimonial_layout_type_2}}
            ';
            $modules['testimonial-mod']['front_css'] .= '
            {{if_condition_testimonial_layout_type==2}}
            	.testimonial-mod{margin:{{margin_css}};padding:{{padding_css}};}
				{{module-class}} .ln-fx{width:100%;display: flex;flex-wrap: wrap;}
            	.auth-img amp-img{border-radius:50%;width:72px;height:72px;margin:0 auto;}
            	{{module-class}} .testi-mod-2{
            		width:{{tst-wth}};
            		display:inline-block;
            		margin:0 auto;
            		text-align:center;
            	}
            	{{module-class}} .testi-cont{
            		width:100%;
            	    padding-bottom: 6%;
                    font-size: {{tst-size}};
                    color:{{tst_color}};
                    font-weight:500;
            	}
                .auth-cntn h5{font-size: {{txt-size}};color: {{aut_color_picker}};font-weight:600;}
                .auth-cntn span{font-size: {{dsg-size}};color: {{dsg_color}};font-weight:normal;}
                @media (max-width: 768px){
                    {{module-class}} .testi-mod-2 {
                        width: 100%;
                    }
                }
            {{ifend_condition_testimonial_layout_type_2}}
            ';
            $modules['testimonial-mod']['front_common_css'] .= '
                .auth-info{
                    width:100%;
                }
                .auth-img{
                    margin-right: 20px;
                    display: inline-block;
                    vertical-align: middle;
                }
                .auth-cntn{
                    text-align:left;
                    display: inline-block;
                    vertical-align: middle;
                }
            ';
    }


    return $modules;
}//function close

?>