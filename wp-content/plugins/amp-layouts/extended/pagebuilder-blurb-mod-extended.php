<?php 
add_filter("ampforwp_pagebuilder_modules_filter", "ampforwpPagebuilderBlurbUpdateOptions", 12, 1);
function ampforwpPagebuilderBlurbUpdateOptions($modules){
        if(isset($modules['blurb-mod']['fields'])){
            foreach ($modules['blurb-mod']['fields'] as $key => $value) {
                if($value['name']=='blurb_layout_type'){
                    $layoutOption = array(
                        array(
                              'value'=>'2',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/blur-mod-2.png'
                            ),
                        );
                    $modules['blurb-mod']['fields'][$key]['options_details'] = array_merge($value['options_details'],$layoutOption);
                    $modules['blurb-mod']['fields'][] = array(
                                'type'      =>'checkbox_bool',
                                'name'      =>"check_for_hover",
                                'label'     => 'Hover',
                                'tab'       =>'design',
                                'default'   =>1,
                                'options'   =>array(
                                                array(
                                                    'label'=>'Yes',
                                                    'value'=>1,
                                                )
                                            ),
                                'content_type'=>'html',
                                'required'  => array('blurb_layout_type'=>'2')
                            );
                    $modules['blurb-mod']['fields'][] = array(
                                'type'      =>'color-picker',
                                'name'      =>"hover_color",
                                'label'     =>'Hover Color',
                                'tab'       =>'design',
                                'default'   =>'#fff',
                                'content_type'=>'css',
                                'required'  => array('check_for_hover'=>'1'),
                                'required'  => array('blurb_layout_type'=>'2')

                            );
                    $repeaterfront_template = '
                    {{if_condition_blurb_layout_type==2}}
                        <div class="blu-mod-2">
                            <span class="ico-pic icon-{{icon-picker}}"></span>
                            <div class="blu-mod-2-cntn">
                                <h3 class="blurb-txt">{{content_title}}</h3>
                                {{content}}
                            </div>
                        </div> 
                    {{ifend_condition_blurb_layout_type_2}}
                    ';
                     $modules['blurb-mod']['repeater']['front_template'] .= $repeaterfront_template;
                    $front_css = '
                        {{if_condition_blurb_layout_type==2}}
                    {{module-class}} .ln-fx{
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-gap: 1px;
                        height: 100%;
                    }
                    {{module-class}}.blurb-mod{
                        margin:{{margin_css}};
                        padding:{{padding_css}};
                        display: grid
                    }
                    {{module-class}} .blu-mod-2{
                        background: {{bg_color}};
                        padding:20px;
                        border-style: solid;
                        border-color: #e8e8e8;
                        border-bottom-width: 1px;
                        border-right-width: 1px;
                        float: left;
                        width: 100%;
                        text-align: {{align_type}};
                    }
                    {{module-class}} .blu-mod-2 .ico-pic{
                        font-size:35px;
                        color:{{ic_color_picker}};
                        display:inline-block;
                        background:{{bg_color_picker}};
                        padding:15px;
                        border-radius:50%;
                        float:left;
                    }
                    {{if_condition_check_for_hover==1}}
                    {{module-class}} .blu-mod-2:hover{
                        background-color: {{hover_color}};
                    }
                    {{ifend_condition_check_for_hover_1}}
                    {{module-class}} .blu-mod-2-cntn .blurb-txt{font-size: {{text-size}};font-weight: 500;color:{{font_color_picker}};}
                    {{module-class}} .blu-mod-2 p{margin: 15px 0px 0px 0px;font-size: 15px;color: #555;line-height: 1.7;}
                    {{ifend_condition_blurb_layout_type_2}}
                    {{if_condition_check_for_border==1}}
                        {{if_condition_blurb_layout_type==2}}
                        {{module-class}} .blu-mod-2 .ico-pic{
                            border:{{border_width}} solid {{border_color}};
                            border-radius:100%;
                            padding:20px;
                            margin-right:20px;
                        }
                        {{ifend_condition_blurb_layout_type_2}}
                    {{ifend_condition_check_for_border_1}}
                    @media(max-width:768px){
                    {{if_condition_blurb_layout_type==2}}
                    .ln-fx{
                        grid-template-columns: 1fr;
                    }
                    {{ifend_condition_blurb_layout_type_2}}
                    }
                    ';
                     $modules['blurb-mod']['front_css'] .= $front_css;
                }
            }
        }
        return $modules;
    }