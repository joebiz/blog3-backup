<?php 
add_filter("ampforwp_pagebuilder_modules_filter", "ampforwpPagebuilderPricingUpdateOptions", 12, 1);
function ampforwpPagebuilderPricingUpdateOptions($modules){

        if(isset($modules['pricing-mod']['fields'])){
            foreach ($modules['pricing-mod']['fields'] as $key => $value) {
                if($value['name']=='pricing_layout_type'){
                    $layoutOption = array(
                        array(
                              'value'=>'2',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/pric-mod-2.png'
                            ),
                        array(
                              'value'=>'3',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/pric-mod-3.png'
                            ),
                        );


                    $modules['pricing-mod']['fields'][$key]['options_details'] = array_merge($value['options_details'],$layoutOption);
                    $modules['pricing-mod']['fields'][] = array(
                                'type'      =>'text',
                                'name'      =>"txt-size",
                                'label'     =>'Font Size',
                                'tab'       =>'design',
                                'default'   =>'20px',
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>array('2','3') )
                            );
                        $modules['pricing-mod']['fields'][] = array(      
                                'type'  =>'select',     
                                'name'  =>'font_type',      
                                'label' =>"Font Weight",
                                'tab'     =>'design',
                                'default' =>'700',
                                'options_details'=>array(
                                    '300'   =>'Light',
                                    '400'   =>'Regular',
                                    '500'   =>'Medium',
                                    '600'   =>'Semi Bold',
                                    '700'   =>'Bold',
                                ),
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>array('2','3') )
                            );
                       $modules['pricing-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"txt_color",
                                'label'     =>'Heading Color',
                                'tab'       =>'design',
                                'default'   =>'#fff',
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>array('2','3') )
                            );
                        $modules['pricing-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"txt_bg_color",
                                'label'     =>'Heading Background',
                                'tab'       =>'design',
                                'default'   =>'#182733',
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>array('2','3') )
                            );
                         $modules['pricing-mod']['fields'][] = array(
                                'type'      =>'text',
                                'name'      =>"blk-wdt",
                                'label'     =>'Width',
                                'tab'       =>'design',
                                'default'   =>'635px',
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>'3')
                            );
                        $modules['pricing-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"bg_color",
                                'label'     =>'Background',
                                'tab'       =>'design',
                                'default'   =>'#3f4ed9',
                                'content_type'=>'css',
                                'required'  => array('pricing_layout_type'=>'3')
                            );
                    $repeaterfront_template = '
                        {{if_condition_pricing_layout_type==2}}
                        <div class="pri-mod-2 {{if_recommended_text}}feature-pri {{ifend_recommended_text}}">
                            <h4 class="pri-tlt-2">{{content_title}}</h4>
                            <div class="pri-mod-cntn">
                                {{if_recommended_text}}<span class="pri-recom">{{recommended_text}}</span>{{ifend_recommended_text}}
                                <span class="pri-lbl-2">{{price_label}}</span>
                                <span class="pri-desc-2">{{price_desc}}</span>
                                <a href="{{btn_link}}" {{if_condition_page_link_open_price==new_page}}target="_blank"{{ifend_condition_page_link_open_price_new_page}} class="btn-txt-2">{{btn_title}}</a>
                            </div>
                            <div class="pri-cnt-2">
                                {{text_desc}}
                            </div>
                        </div>
                        {{ifend_condition_pricing_layout_type_2}}
                        {{if_condition_pricing_layout_type==3}}
                            <div class="pri-mod-2 pri-mod-3{{if_recommended_text}}feature-pri {{ifend_recommended_text}}">
                                <h4 class="pri-tlt-2">{{content_title}}</h4>
                                <div class="pri-mod-cntn">
                                    {{if_recommended_text}}<span class="pri-recom">{{recommended_text}}</span>{{ifend_recommended_text}}
                                    <span class="pri-lbl-2">{{price_label}}</span>
                                    <div class="pri-cnt-2">
                                        {{text_desc}}
                                    </div>
                                    <a href="{{btn_link}}" {{if_condition_page_link_open_price==new_page}}target="_blank"{{ifend_condition_page_link_open_price_new_page}} class="btn-txt-2">{{btn_title}}</a>
                                </div>
                            </div>
                        {{ifend_condition_pricing_layout_type_3}}
                    ';
                     $modules['pricing-mod']['repeater']['front_template'] .= $repeaterfront_template;

                     $front_css = '
                        {{if_condition_pricing_layout_type==2}}
                            {{module-class}} .ln-fx{
                                display:inline-flex;
                                width:100%;
                                flex-wrap:wrap;
                            }
                            .pricing-mod{margin:{{margin_css}};padding:{{padding_css}};}
                            {{module-class}} .pri-mod-2{
                                display: flex;
                                flex-direction: column;
                                flex: 1 0 25%;
                                position:relative;
                                margin:10px;
                                background:#fff;
                            }
                            {{module-class}} .pri-mod-cntn{
                                padding:10px 20px;
                            }
                            {{module-class}} .pri-mod-cntn span{
                                display:block;
                            }
                            {{module-class}} .pri-tlt-2{
                                padding:15px 0px;
                            }
                            {{module-class}} .pri-lbl-2{
                                color: #555;
                                font-size: 40px;
                                font-weight: 300;
                            }
                            {{module-class}} .pri-cnt-2 li:before{
                                content: "\e86c";
                                font-family: "icomoon";
                                font-size: 24px;
                                color: #4CAF50;
                                margin-right:15px;
                                position: relative;
                                top: 5px;
                            }
                            .pri-desc-2{
                                font-size: 13px;
                            }
                            {{module-class}} .pri-mod-cntn .btn-txt-2{
                                background:{{btn_bg_color}};
                                color: {{font_color_picker}};
                                padding: 11px 37px;
                                font-weight: 700;
                                margin-top: 25px;
                                border-radius:3px;
                                border: 2px solid {{btn_bg_color}};
                                display: inline-block;
                            }
                            {{module-class}} .pri-mod-cntn .btn-txt-2:hover{
                                background-color: {{font_color_picker}};
                                color:{{btn_bg_color}};
                            }
                            {{module-class}} .pri-cnt-2 li{
                                border-top: 1px solid #e8e8e8;
                                font-size: 14px;
                                padding: 13px 20px;
                                list-style-type:none;
                            }
                            {{module-class}} .pri-tlt-2{
                                background: {{txt_bg_color}};
                                color: {{txt_color}};
                                font-size: {{txt-size}};
                                font-weight: {{font_type}};
                            }
                            
                        {{ifend_condition_pricing_layout_type_2}}
                        {{if_condition_pricing_layout_type==3}}
                            .pricing-mod{margin:{{margin_css}};padding:{{padding_css}};}
                            {{module-class}} .pri-mod-3{
                                width:{{blk-wdt}};
                                margin:0 auto;
                                background:{{bg_color}};
                                padding:65px; 
                            }
                            {{module-class}} .pri-cnt-2 li{
                                color:#fff;
                                font-size: 19px;
                            }
                            {{module-class}} .pri-tlt-2{
                                background: {{txt_bg_color}};
                                color: {{txt_color}};
                                font-size: {{txt-size}};
                                font-weight: {{font_type}};
                            }
                            {{module-class}} .pri-lbl-2{
                                color:#fff;
                                font-size:26px;
                            }
                            {{module-class}} .pri-cnt-2 li:before{
                                content: "\e86c";
                                font-family: "icomoon";
                                font-size: 24px;
                                color: #fff;
                                margin-right:15px;
                                position: relative;
                                top: 5px;
                            }
                            {{module-class}} .pri-mod-cntn .btn-txt-2{
                                background:{{btn_bg_color}};
                                color: {{font_color_picker}};
                                padding: 11px 37px;
                                font-weight: 500;
                                margin-top: 25px;
                                border-radius:3px;
                                border: 2px solid {{btn_bg_color}};
                                display: inline-block;
                                font-size: 16px;
                                box-shadow: 0 5px 9px 0 rgba(0,0,0,.17);
                            }
                            @media(max-width:768px){
                                {{module-class}} .pri-mod-3{
                                    width:100%;
                                    padding:30px;
                                }
                            }
                        {{ifend_condition_pricing_layout_type_3}}
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
                     $modules['pricing-mod']['front_css'] .= $front_css;
                     $modules['pricing-mod']['front_common_css'] .= $frontCommonCss;
                }
            }
        }
        return $modules;
    }
