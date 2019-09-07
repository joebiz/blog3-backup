<?php 
add_filter("ampforwp_pagebuilder_modules_filter", "ampforwpPagebuilderFeatureUpdateOptions", 12, 1);
function ampforwpPagebuilderFeatureUpdateOptions($modules){
        if(isset($modules['feature-mod']['fields'])){
            foreach ($modules['feature-mod']['fields'] as $key => $value) {
                if($value['name']=='feature_layout_type'){
                    $layoutOption = array(
                        array(
                              'value'=>'2',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/feature-2.png'
                            ),
                        );


                    $modules['feature-mod']['fields'][$key]['options_details'] = array_merge($value['options_details'],$layoutOption);
                            $modules['feature-mod']['fields'][] = array(
                                'type'      =>'text',
                                'name'      =>"head_fntsize",
                                'label'     =>'Heading Font Size',
                                'tab'       =>'design',
                                'default'   =>'20px',
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(      
                                'type'      =>'text',       
                                'name'      =>"h_line-height",        
                                'label'     =>'Line Height',
                                'tab'     =>'design',
                                'default'   =>'1.2',    
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(      
                                'type'  =>'select',     
                                'name'  =>'h_font_type',      
                                'label' =>"Font Weight",
                                'tab'     =>'design',
                                'default' =>'500',
                                'options_details'=>array(
                                    '300'   =>'Light',
                                    '400'   =>'Regular',
                                    '500'   =>'Medium',
                                    '600'   =>'Semi Bold',
                                    '700'   =>'Bold',
                                ),
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"head_color",
                                'label'     =>'Heading Color',
                                'tab'       =>'design',
                                'default'   =>'#fff',
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(
                                'type'      =>'text',
                                'name'      =>"cnt_fntsize",
                                'label'     =>'Content Font Size',
                                'tab'       =>'design',
                                'default'   =>'16px',
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(      
                                'type'      =>'text',       
                                'name'      =>"cnt-line-height",        
                                'label'     =>'Line Height',
                                'tab'     =>'design',
                                'default'   =>'1.4',    
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(      
                                'type'  =>'select',     
                                'name'  =>'cnt_font_type',      
                                'label' =>"Font Weight",
                                'tab'     =>'design',
                                'default' =>'400',
                                'options_details'=>array(
                                    '300'   =>'Light',
                                    '400'   =>'Regular',
                                    '500'   =>'Medium',
                                    '600'   =>'Semi Bold',
                                    '700'   =>'Bold',
                                ),
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );
                            $modules['feature-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"cnt_color",
                                'label'     =>'Content Color',
                                'tab'       =>'design',
                                'default'   =>'#fff',
                                'content_type'=>'css',
                                'required'  => array('feature_layout_type'=>array('2') )
                            );

                   

                     $front_css = '
                        {{if_condition_feature_layout_type==2}}
                            {{module-class}} .ln-fx{
                                display: grid;
                                grid-template-columns: 1fr 1fr;
                                grid-gap: 25px 40px;
                            }
                            {{module-class}} .ft-2 h3{
                                font-size:{{head_fntsize}};
                                line-height:{{h_line-height}};
                                font-weight:{{h_font_type}};
                                color:{{head_color}};
                                letter-spacing: 1px;
                                margin-bottom:10px;
                            }
                            {{module-class}} .ft-2{
                                font-size:{{cnt_fntsize}};
                                line-height:{{cnt-line-height}};
                                font-weight:{{cnt_font_type}};
                                color:{{cnt_color}};
                                text-align: center;
                                transition: all 0.3s ease-in-out 0s;
                            }
                            {{module-class}} .ln-fx .ft-2:hover{
                                box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .1);
                                transform: translate(0px, -10px);
                            }
                            @media(max-width:500px){
                                {{module-class}} .ln-fx {
                                    grid-template-columns: 1fr;
                                }
                            }   
                        {{ifend_condition_feature_layout_type_2}}
                        
                     ';
                     $frontCommonCss = '
                        .pri-mod-2{
                            text-align:center;
                        }
                        .pri-cnt-2{
                            padding:20px 0px;
                            text-align: left;
                        }
                        .pri-cnt-2 li{
                            list-style-type:none;
                        }

                     ';
                     $front_cssrepeater = '
                        .{{repeater-module-class}}{
                            background:{{bg_color}};
                            padding:40px;
                            border-radius: 10px;
                        }
                     '
                     ;
                     $modules['feature-mod']['front_css'] .= $front_css;
                     
                     $modules['feature-mod']['front_common_css'] .= $frontCommonCss;
                     $repeaterfields = array(
                                    array(     
                                        'type'      =>'text',       
                                        'name'      =>"head_title",      
                                        'label'     =>'Heading',
                                        'tab'       =>'customizer',
                                        'default'   =>'Your Feature Title', 
                                        'content_type'=>'html',
                                        'required'  => array('feature_layout_type'=>array('2') )
                                    ),
                                    array(     
                                        'type'      =>'text-editor',       
                                        'name'      =>"cntnt",      
                                        'label'     =>'Content',
                                        'tab'       =>'customizer',
                                        'default'   =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 
                                        'content_type'=>'html',
                                        'required'  => array('feature_layout_type'=>array('2') )
                                    ),
                                    array(
                                        'type'      =>'color-picker',
                                        'name'      =>"bg_color",
                                        'label'     =>'Background Color',
                                        'tab'       =>'design',
                                        'default'   =>'#ccc',
                                        'content_type'=>'css',
                                        'required'  => array('feature_layout_type'=>array('2') )
                                    ),
                                );
                    $modules['feature-mod']['repeater']['fields'] = array_merge($modules['feature-mod']['repeater']['fields'],$repeaterfields);
                    if(!isset($modules['feature-mod']['repeater']['front_css'])){
                        $modules['feature-mod']['repeater']['front_css'] = '';
                    }
                    $modules['feature-mod']['repeater']['front_css'] .= $front_cssrepeater;
                    $modules['feature-mod']['repeater']['front_template'] .= '
                        {{if_condition_feature_layout_type==2}}
                        <div class="ft-2 {{repeater-module-class}}">
                            <h3>{{head_title}}</h3>
                            {{cntnt}}
                        </div>
                        {{ifend_condition_feature_layout_type_2}}
                    ';
                }
            }
        }
        return $modules;
    }
