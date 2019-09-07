<?php

 add_filter("ampforwp_pagebuilder_modules_filter", "ampforwpPagebuilderCategoryUpdateOptions", 12, 1);
 add_filter("ampforwp_pb_content_mod_set_height_width", 'updateImage_width_height',10,3);
 
function ampforwpPagebuilderCategoryUpdateOptions($modules){
    if(isset($modules['contents']['fields'])){
        foreach ($modules['contents']['fields'] as $key => $value) {
            if($value['name']=='content_layout_type'){
                //content_layout_type update
                $layoutOption = array(
                        array(
                          'value'=>'2',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-2-img.png'
                        ),
                        array(
                          'value'=>'3',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-3-img.png'
                        ),
                        array(
                          'value'=>'4',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-4-img.png'
                        ),
                        array(
                          'value'=>'5',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-5-img.png'
                        ),
                        array(
                          'value'=>'6',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-6-img.png'
                        ),
                        array(
                          'value'=>'7',
                          'label'=>'',
                          'demo_image'=> AMPFORWP_LAYOUT_DIR_URI.'/images/cat-7-img.png'
                        ),
                );

                $modules['contents']['fields'][$key]['options_details'] = array_merge($value['options_details'],$layoutOption);


                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-2",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'1000', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 2),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-2",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'400', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 2),
                    );
                $modules['contents']['fields'][] = array(
                        'type'    =>'checkbox',
                        'name'    =>"image_layout",
                        'label'   =>'Responsive',
                        'tab'   =>'customizer',
                        'default' =>array('responsive'),
                        'options' =>array(
                                array(
                                  'label'=>'Responsive',
                                  'value'=>'responsive',
                                ),
                              ),
                        'content_type'=>'html',
                        'required'  => array('content_layout_type' => 2),
                      );
                 $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-3",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'286', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 3),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-3",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'161', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 3),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"dsg3-width",    
                    'label'   =>'Container Width ',
                    'tab'     =>'customizer',
                    'default' =>'950px', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 3),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"border-top-color",    
                    'label'   =>'Border Color ',
                    'tab'     =>'container_css',
                    'default' =>'#0DBE98', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 3),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-4",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'728', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 4),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-4",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'410', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 4),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-5",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'350', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 5),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-5",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'190', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 5),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"text-color",    
                    'label'   =>'Text Color ',
                    'tab'     =>'container_css',
                    'default' =>'#003fff', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 5),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-6",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'220', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-6",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'135', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"txt-size",    
                    'label'   =>'Text Size',
                    'tab'     =>'container_css',
                    'default' =>'18px', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"txt-clr",    
                    'label'   =>'Text Color ',
                    'tab'     =>'container_css',
                    'default' =>'#000', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"tlt-size",    
                    'label'   =>'Title Size',
                    'tab'     =>'container_css',
                    'default' =>'50px', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"tlt-clr",    
                    'label'   =>'Title Color ',
                    'tab'     =>'container_css',
                    'default' =>'#000', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"btn-size",    
                    'label'   =>'Button Size',
                    'tab'     =>'container_css',
                    'default' =>'20px', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"btn-txt-clr",    
                    'label'   =>'Button Text Color ',
                    'tab'     =>'container_css',
                    'default' =>'#000', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"btn-brd-clr",    
                    'label'   =>'Button Border Color ',
                    'tab'     =>'container_css',
                    'default' =>'#000', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"tg-bg",    
                    'label'   =>'Tag Background Color',
                    'tab'     =>'container_css',
                    'default' =>'#168DFF', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(      
                            'type'  =>'select',     
                            'name'  =>'position_type',     
                            'label' =>"Content Display Position",
                            'tab'     =>'container_css',
                            'default' =>'left',
                            'options_details'=>array(
                                                'left'      =>'Left',
                                                'right'    =>'Right',                                     
                                                ),
                            'content_type'=>'css',
                            'required'  => array('content_layout_type' => 6),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-width-7",    
                    'label'   =>'Image Width',
                    'tab'     =>'customizer',
                    'default' =>'590', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'text',   
                    'name'    =>"img-height-7",    
                    'label'   =>'Image Height',
                    'tab'     =>'customizer',
                    'default' =>'332', 
                    'content_type'=>'html',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'checkbox_bool',
                    'name'      =>"check_for_cat",
                    'label'     => 'Category Title',
                    'tab'       =>'container_css',
                    'default'   =>1,
                    'options'   =>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                    )
                                ),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'text',
                    'name'      =>"cat-size",
                    'label'     =>'Font Size',
                    'tab'       =>'container_css',
                    'default'   =>'24px',
                    'content_type'=>'css',
                    'required'  => array('check_for_cat'=>'1', 'content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(      
                    'type'  =>'select',     
                    'name'  =>'cat_wght',       
                    'label' =>"Font Weight",
                    'tab'     =>'container_css',
                    'default' =>'500',
                    'options_details'=>array(
                        '300'   =>'Light',
                        '400'   =>'Regular',
                        '500'   =>'Medium',
                        '600'   =>'Semi Bold',
                        '700'   =>'Bold',
                    ),
                    'content_type'=>'css',
                    'required'  => array('check_for_cat'=>'1', 'content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"cat-clr",    
                    'label'   =>'Color ',
                    'tab'     =>'container_css',
                    'default' =>'#00306e', 
                    'content_type'=>'css',
                    'required'  => array( 'check_for_cat'=>'1', 'content_layout_type' => 7 ),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'checkbox_bool',
                    'name'      =>"check_for_bodr",
                    'label'     => 'Border',
                    'tab'       =>'container_css',
                    'default'   =>1,
                    'options'   =>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                    )
                                ),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'text',
                    'name'      =>"tl-size",
                    'label'     =>'Title Font Size',
                    'tab'       =>'container_css',
                    'default'   =>'24px',
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(      
                    'type'  =>'select',     
                    'name'  =>'fnt_wght',       
                    'label' =>"Font Weight",
                    'tab'     =>'container_css',
                    'default' =>'600',
                    'options_details'=>array(
                        '300'   =>'Light',
                        '400'   =>'Regular',
                        '500'   =>'Medium',
                        '600'   =>'Semi Bold',
                        '700'   =>'Bold',
                    ),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"tl-clr",    
                    'label'   =>'Color ',
                    'tab'     =>'container_css',
                    'default' =>'#00306e', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"tlh-clr",    
                    'label'   =>'Title Hover Color ',
                    'tab'     =>'container_css',
                    'default' =>'#2f71a8', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'text',
                    'name'      =>"tg-size",
                    'label'     =>'Tag Font Size',
                    'tab'       =>'container_css',
                    'default'   =>'15px',
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(      
                    'type'  =>'select',     
                    'name'  =>'tg_wght',       
                    'label' =>"Font Weight",
                    'tab'     =>'container_css',
                    'default' =>'500',
                    'options_details'=>array(
                        '300'   =>'Light',
                        '400'   =>'Regular',
                        '500'   =>'Medium',
                        '600'   =>'Semi Bold',
                        '700'   =>'Bold',
                    ),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"tg-clr",    
                    'label'   =>'Color ',
                    'tab'     =>'container_css',
                    'default' =>'#9c9d9d', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(
                    'type'      =>'text',
                    'name'      =>"cnt-size",
                    'label'     =>'Content Font Size',
                    'tab'       =>'container_css',
                    'default'   =>'16px',
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(      
                    'type'  =>'select',     
                    'name'  =>'cnt_wght',       
                    'label' =>"Font Weight",
                    'tab'     =>'container_css',
                    'default' =>'400',
                    'options_details'=>array(
                        '300'   =>'Light',
                        '400'   =>'Regular',
                        '500'   =>'Medium',
                        '600'   =>'Semi Bold',
                        '700'   =>'Bold',
                    ),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(    
                    'type'    =>'color-picker',   
                    'name'    =>"cnt-clr",    
                    'label'   =>'Color ',
                    'tab'     =>'container_css',
                    'default' =>'#666', 
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                $modules['contents']['fields'][] = array(      
                    'type'  =>'select',     
                    'name'  =>'dsgn_clmns',     
                    'label' =>"DIfferent Designs by Columns",
                    'tab'     =>'customizer',
                    'default' =>'1_col',
                    'content_type'=>'css',
                    'options_details'=>array(
                                        '1_col'    =>'1 Column',
                                        '2_col'    =>'2 Columns',
                                        '3_col'    =>'3 Columns',
                                        '4_col'    =>'4 Columns'),
                    'content_type'=>'css',
                    'required'  => array('content_layout_type' => 7),
                    );
                
                //front_template update
                $front_template = '  {{if_condition_content_layout_type==2}}
                          <div class="cat-desing-2">{{category_selection}}</div>
                      {{ifend_condition_content_layout_type_2}}

                      {{if_condition_content_layout_type==3}}
                         <div class="pb_mod cat_mod-3"><h5>{{content_title}}</h5>   
                              <div class="cat-design-3"><ul>{{category_selection}}</ul></div>    
                          </div>
                        {{ifend_condition_content_layout_type_3}}

                        {{if_condition_content_layout_type==4}}
                            <div class="pb_mod cat-4">
                                {{category_selection}}
                            </div>
                      {{ifend_condition_content_layout_type_4}}

                      {{if_condition_content_layout_type==5}}
                         <div class="pb_mod cat-5">   
                            <ul>{{category_selection}}</ul>  
                          </div>
                        {{ifend_condition_content_layout_type_5}}
                        {{if_condition_content_layout_type==6}}
                         <div class="pb_mod cat-6">
                            <div class="c6-t">
                                <span>{{content_title}}</span>
                                <h2>{{content_category_title}}</h2>
                            </div>
                            <div class="c6-b">
                                <a class="lk" href="{{content_category_link}}">MORE STORIES</a>
                            </div>
                            <ul class="c6-bk">{{category_selection}}</ul>
                          </div>
                        {{ifend_condition_content_layout_type_6}}
                        {{if_condition_content_layout_type==7}}
                            <div class="pb_mod cat-7">
                                 {{if_condition_check_for_cat==1}}<h2>{{content_category_title}}</h2> {{ifend_condition_check_for_cat_1}}
                                <ul class="c7-bk">{{category_selection}}</ul>
                            </div>
                        {{ifend_condition_content_layout_type_7}}
                        ';

                $modules['contents']['front_template'] .= $front_template;

                //front_css update
                $front_css = '{{if_condition_content_layout_type==2}}
                        /*** design-cat-2-styles ***/
                        .sp{
                          margin-top:0;
                        }
                        .cat-desing-2{
                          margin:{{margin_css}};
                          padding:{{padding_css}};
                        }
                        .cat_mod ul li {
                          list-style-type:none;
                        }
                        .wrap .cat-img a{
                          margin:0;
                          padding:0;
                          line-height:0;
                        }
                        .cat-cntn a{
                          margin:0; 
                        }
                        .cat-desing-2 .dsg-2{
                          width:100%;
                          height:auto;
                          margin:0;
                          padding:0;
                          position:relative;
                          line-height:0;
                        }
                        .dsg-2:hover .cat-2-tlt{
                          text-decoration:underline #0DBE98;
                        }
                        .cat-2-tlt{
                          max-width: 1100px;
                            margin: 0 auto;
                            text-align: center;
                            font-size: 60px;
                            font-weight: 900;
                            line-height: 1.4;
                            position: absolute;
                            left: 0;
                            right: 0;
                            top: auto;
                            bottom: 20px;
                            color: #fff;
                            text-transform: uppercase;
                        }
                        .cat-2-img img{
                          width:100%;
                          height:auto;
                        }
                        @media(max-width:1024px){
                            .cat-2-tlt{
                              max-width:100%;
                              font-size:50px;
                              padding:0px 10px;
                            }
                        }
                        @media(max-width:1024px){
                            .cat-2-tlt{
                                font-size:38px;
                            }
                        }
                        @media(max-width:600px){
                            .cat-2-tlt{
                                font-size:28px;
                            }
                        }
                        @media(max-width:425px){
                        	.sp{
	                          margin-top:20px;
	                        }
                            .cat-2-tlt{
                                font-size:22px;
                            }
                        }
                        {{ifend_condition_content_layout_type_2}}
                        {{if_condition_content_layout_type==3}}
                        /*** design-cat-3-styles ***/
                        {{module-class}} .cat_mod-3 .cat-3-img {
                          width:100%;
                        }
                        {{module-class}} .contents{
                            display:inline-block;
                            width:100%;
                        }
                        {{module-class}}{
                           margin:{{margin_css}};
                           padding:{{padding_css}};
                        }
                        {{module-class}} .cat_mod-3{
                          width:{{dsg3-width}};
                          margin:0 auto;
                        }
                        {{module-class}} .cat-3-img a{
                            margin: 0;
                            padding: 0;
                            line-height: 0;
                            display: block;
                        }
                        {{module-class}} .cat_mod-3 ul{
                            display: flex;
                            flex-wrap: wrap;
                            margin: -15px;
                            padding:0;
                            list-style-type:none;
                         }
                        {{module-class}} .cat_mod-3 ul li {
                            margin: 15px 10px 20px 10px;
                            flex-basis: calc(34% - 30px);
                        }
                        {{module-class}} .cat-3-tlt{
                          font-size:16px;
                          line-height:1.4;
                          font-weight: 600;
                          margin-top: 8px;
                        }
                        {{module-class}} .cat-3-tlt a{
                            color: #000;
                        }
                        {{module-class}} .cat_mod-3 h5{
                            text-transform: uppercase;
                            padding: 10px 0px 15px 0px;
                            font-style: italic;
                            letter-spacing: 1px;
                            font-size: 18px;
                            font-weight: 800;
                            border-top:3px solid {{border-top-color}};
                        }
                        @media(max-width:1200px){
                        {{module-class}} .cat_mod-3{
                            width:auto;
                            padding:0px 20px;
                            display:inline-block;
                          }
                        }
                        @media(max-width:768px){
                          {{module-class}} .cat_mod-3{
                            width:100%;
                            padding:0px 10px;
                            display:inline-block;
                          }
                          {{module-class}} .cat_mod-3 ul li {
                              flex-basis: calc(100% - 30px);
                              margin: 10px 15px;
                          }
                          {{module-class}} .cat_mod-3 .cat-3-img {
                              width: 40%;
                              float: left;
                              margin-right: 20px;
                          }
                          {{module-class}} .cat_mod-3 .cat-3-tlt {
                              width: 54%;
                              float: left;
                              margin-top: 0;
                          }
                          }
                          @media (max-width: 480px){
                          {{module-class}} .cat_mod-3 .cat-3-img {
                              width: 100%;
                              float: none;
                              margin-right: 0px;
                          }
                          {{module-class}} .cat_mod-3 .cat-3-tlt {
                              width: 100%;
                              float: none;
                              margin-top:6px;
                          }

                        }
                        {{ifend_condition_content_layout_type_3}}
                        {{if_condition_content_layout_type==4}}
                        {{module-class}} .cat-4{
                          margin:{{margin_css}};
                          padding:{{padding_css}};
                          line-height:0;
                        }
                        {{module-class}} .dsg-4{
                            position:relative;
                            width:100%;
                            display:inline-block;
                        }
                        {{module-class}} .cat-ovly{
                            background: linear-gradient(to bottom,transparent,rgba(0,0,0,.9));
                            bottom: 0;
                            left: 0;
                            position: absolute;
                            right: 0;
                            top: 0;
                        }
                        {{module-class}} .cat-4-artl{
                            position: absolute;
                            top: auto;
                            bottom: 18px;
                            width:80%;
                            left: 0px;
                            padding-left:20px;
                            line-height:1.6; 
                            color:#fff;
                        }
                        {{module-class}} .cat-4-pt{
                            display:inline-flex;
                            font-weight:normal;
                            width:100%;
                            margin-bottom:15px;
                        }
                        {{module-class}} .cat-4-artl span{
                            font-size: 13px;
                            align-items: center;
                            display:flex;
                            letter-spacing: 0.2px;
                            color: rgba(255, 255, 255, 0.90);
                        }
                        {{module-class}} .cat-4-artl .by{
                            padding: 0 4px 0 .625rem;
                        }
                        {{module-class}} .cat-4-artl .by:before{
                            content:"";
                            border-left: 1px solid rgba(255,255,255,.5);
                            height: 100%;
                            padding-right: 0.65rem;
                            align-items: center;
                            height: 28px;
                            display:flex;
                        }
                        {{module-class}} .cat-4-artl h2{
                            font-size:2rem;
                            line-height: 1.5;
                        }
                        @media(max-width:425px){
                            .sp{
                                margin:0;
                            }
                            {{module-class}} .cat-4-artl h2 {
                                font-size: 24px;
                            }
                            {{module-class}} .cat-4-pt{
                                display:none;
                            }
                            {{module-class}} .cat-4-artl .by:before{
                                height: 20px;
                            }
                            {{module-class}} .cat-4-artl{
                                bottom:15px;
                            }
                            {{module-class}} .cat-4 {
                                padding:0;
                            }
                        }
                        @media(max-width:375px){
                            {{module-class}} .cat-4-artl h2 {
                                font-size: 20px;
                            }
                        }
                        {{ifend_condition_content_layout_type_4}}
                        {{if_condition_content_layout_type==5}}
                        {{module-class}} .cat-5{
                            margin:{{margin_css}};
                            padding:{{padding_css}};
                        }
                        {{module-class}} .cat-5 ul{
                            display: flex;
                            flex-wrap: wrap;
                            margin: -9px;
                        }
                        {{module-class}} .dsg-5{
                            margin: 8px 8px 7px 7px;
                            flex-basis: calc(49.33% - 10px);
                            line-height:0;
                            border: 1px solid #ededed;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-between;
                            background:#fff;
                        }
                        {{module-class}} .dsg-5:hover .cat-5-artl h4{
                            color:{{text-color}};
                        }
                        {{module-class}} .dsg-5 .athr-dtls{
                            line-height: 1.4;
                            padding: 0px 20px 20px;
                            font-size: 13px;
                        }
                        {{module-class}} .dsg-5 .athr-dtls a{
                            color:#90949c;
                        }
                        {{module-class}} .cat-5-artl h4{
                            font-size: 18px;
                            color: #101010;
                            padding: 15px 20px 20px 20px;
                            line-height: 1.35;
                            font-weight:600;
                            transition:0.3s ease-in-out 0s;
                        }
                        {{module-class}} .athr-dtls{
                            padding:20px 0px 15px;
                        }
                        {{module-class}} .athr-dt{
                            float:right;
                        }
                        @media(max-width:768px){
                            {{module-class}} .cat-5{
                                width:100%;
                                padding:0px 10px;
                            }
                            {{module-class}} .dsg-5 {
                                flex-basis: calc(49.33% - 13px);
                            }
                        }
                        @media(max-width:425px){
                            {{module-class}} .cat-5{
                                padding:0;
                            }
                            {{module-class}} .cat-5 ul {
                                margin:0px;
                            }
                            {{module-class}} .dsg-5 {
                                flex-basis: calc(100%);
                                margin:10px 0px;
                            }
                        }
                        {{ifend_condition_content_layout_type_5}}
                        {{if_condition_content_layout_type==6}}
                        .sp{margin:0;}
                        {{module-class}}{
                           margin:{{margin_css}};
                           padding:{{padding_css}};
                        }
                        {{module-class}} .cat-6{
                            display: grid;
                            grid-template-columns: 1fr 3fr;
                            width: 100%;
                            overflow-x: scroll;
                            overflow-y: hidden;
                            {{if_condition_position_type==left}}
                            grid-template-areas: 
                                               "content block"
                                               "button block"
                            {{ifend_condition_position_type_left}}
                            {{if_condition_position_type==right}}
                            grid-template-areas: 
                                               "block content"
                                               "block button"
                            {{ifend_condition_position_type_right}}
                        }
                        {{module-class}} .c6-t{
                            align-self: end;
                            text-align:center;
                            grid-area:content;
                        }
                        {{module-class}} .c6-b{align-self: start;margin-top:15px;grid-area:button;text-align:center;}
                        {{module-class}} .c6-bk{
                            display: grid;
                            grid-template-columns: 220px 220px 220px 220px;
                            grid-gap: 40px;
                            text-align: center;
                            width: 100%;
                            overflow-x: scroll;
                            grid-area:block;
                            {{if_condition_position_type==left}}
                            padding-left: 3%;
                            {{ifend_condition_position_type_left}}
                            {{if_condition_position_type==right}}
                            padding-right: 3%;
                            {{ifend_condition_position_type_right}}
                        }
                        {{module-class}} .c6-bk li{
                            list-style-type:none;
                            background:#fff;
                        }
                        {{module-class}} .c6-t span{
                            font-size: {{txt-size}};
                            color: {{txt-clr}};
                            font-weight: 500;
                        }
                        {{module-class}} .cat-6 h2{
                            font-size:{{tlt-size}};
                            color:{{tlt-clr}};
                            font-weight:500;
                            line-height: 1.1;
                        }
                        {{module-class}} .cat-6 .lk{
                            border: 2px solid {{btn-brd-clr}};
                            color: {{btn-txt-clr}};
                            padding: 10px 30px;
                            border-radius: 7px;
                            font-size: {{btn-size}};
                            font-weight: 500;
                            display:inline-block;
                        }
                        {{module-class}} .c6-a{line-height:0;}
                        {{module-class}} .c6-ad{padding:0px 11px 10px;}
                        {{module-class}} .c6-ad a{color:#000;}
                        {{module-class}} .c6-ad h4{
                            line-height: 1.4;
                            font-size: 18px;
                            font-weight: 500;
                        }
                        {{module-class}} .c6-ad .at-ds{
                            font-size: 11px;
                            line-height: 1.4;
                            margin-top: 15px;
                            color:#666;
                        }
                        {{module-class}} .c6-ad .tag{
                            color: #fff;
                            background: {{tg-bg}};
                            padding: 5px 15px;
                            position: relative;
                            top: -15px;
                            font-size: 15px;
                        }
                        @media(max-width:1360px){
                            {{module-class}} .cat-6 .lk{padding: 10px 12px;}
                        }
                        @media(max-width:768px){
                            {{module-class}} .cat-6{
                                display:grid;
                                grid-template-columns: 1fr;
                                grid-gap: 25px 0px;
                                grid-template-areas: 
                                                   "content content"
                                                   "block block"
                                                   "button button"
                            }
                            {{module-class}} .c6-bk{margin:0;}
                            {{module-class}} .cat-6 .lk{padding: 10px 30px;}
                        }
                        {{ifend_condition_content_layout_type_6}}
                        {{if_condition_content_layout_type==7}}
                            {{if_condition_check_for_cat==1}}
                                {{module-class}} .cat-7 h2{
                                    font-size: {{cat-size}};
                                    line-height: 1.0;
                                    color: {{cat-clr}};
                                    font-weight: {{cat_wght}};
                                    margin-bottom: 12px;
                                    font-family: \'Segoe UI\',\'Helvetica Neue\', Arial, sans-serif;
                                    letter-spacing: 1px;
                                    text-transform: uppercase;
                                }
                            {{ifend_condition_check_for_cat_1}}
                            {{if_condition_check_for_bodr==1}}
                                {{module-class}} .c7-bk{
                                    border-top: 1px solid #d4d4d4;
                                    padding-top: 20px;
                                }
                            {{ifend_condition_check_for_bodr_1}}
                            {{module-class}} .c7-bk li{
                                list-style-type:none;
                                line-height: 0;

                            }
                            {{module-class}} .c7-cnt .tag{
                                color: {{tg-clr}};
                                font-size: {{tg-size}};
                                font-weight: {{tg_wght}};
                                display: inline-block;
                                margin-bottom: 6px;
                            }
                            {{module-class}} .c7-cnt a{
                                font-size: {{tl-size}};
                                line-height: 1.2;
                                color: {{tl-clr}};
                                font-weight: {{fnt_wght}};
                                display:block;
                                margin-bottom:8px;
                            }
                            {{module-class}} .c7-cnt a:hover{
                                color:{{tlh-clr}};
                            }
                            {{module-class}} .c7-cnt{
                                margin-top: 12px;
                                font-size: {{cnt-size}};
                                color: {{cnt-clr}};
                                font-weight: {{cnt_wght}};
                                line-height: 1.5;
                            }
                            {{if_condition_dsgn_clmns==1_col}}
                                {{module-class}} .dsg-7{
                                    width:100%;
                                    display:grid;
                                    grid-template-columns: 1fr 1fr;
                                    grid-gap: 40px;
                                }
                                {{module-class}} .c7-cnt{
                                    margin-top:0px;
                                 }
                                {{module-class}} .c7-img{
                                    line-height:0;
                                }
                                {{module-class}} .c7-bk li{
                                    margin-bottom:40px;
                                }
                            {{ifend_condition_dsgn_clmns_1_col}}
                            {{if_condition_dsgn_clmns==2_col}}
                                {{module-class}} .c7-bk{
                                    display:grid;
                                    grid-template-columns: 1fr 1fr;
                                    grid-gap: 40px;
                                    margin-bottom:40px;
                                }
                                {{module-class}} .dsg-7{
                                    display:grid;
                                    grid-template-columns: 1fr 1fr;
                                    grid-gap: 40px;
                                }
                                {{module-class}} .c7-cnt{
                                    margin-top:0px;
                                }
                            {{ifend_condition_dsgn_clmns_2_col}}
                            {{if_condition_dsgn_clmns==3_col}}
                                {{module-class}} .c7-bk{
                                    display:grid;
                                    grid-template-columns: 1fr 1fr 1fr;
                                    grid-gap: 40px;
                                    margin-bottom:40px;
                                }
                            {{ifend_condition_dsgn_clmns_3_col}}
                            {{if_condition_dsgn_clmns==4_col}}
                                {{module-class}} .c7-bk{
                                    display:grid;
                                    grid-template-columns: 1fr 1fr 1fr 1fr;
                                    grid-gap: 45px;
                                    margin-bottom:40px;
                                }
                            {{ifend_condition_dsgn_clmns_4_col}}
                            @media(max-width:768px){
                                {{module-class}} .c7-bk{
                                    grid-template-columns: 1fr 1fr;
                                }
                                {{module-class}} .dsg-7{
                                        grid-template-columns: 1fr;
                                        grid-gap: 20px;
                                }
                            }
                            @media(max-width:425px){
                                {{module-class}} .c7-bk{
                                    grid-template-columns: 1fr;
                                }
                            }
                        {{ifend_condition_content_layout_type_7}}
                        ';
                $front_rtl_css = '
                {{if_condition_content_layout_type==4}}
                    {{module-class}} .cat-4-artl {
                       left:auto;
                       padding-left:0px;
                       padding-right:20px;
                    }
                    {{module-class}} .cat-4-artl .by:before{
                        padding-right:0;
                        margin-left:10px;
                        padding-left:0.65rem;
                    }
                {{ifend_condition_content_layout_type_4}}
                {{if_condition_content_layout_type==5}}
                    {{module-class}} .athr-dt{
                        float:left;
                    }
                {{ifend_condition_content_layout_type_5}}
                
                ';
                $modules['contents']['front_css'] .= $front_css;

                if(isset( $modules['contents']['front_rtl_css'])){
                 $modules['contents']['front_rtl_css'] .= $front_rtl_css;
                 } else{
                    $modules['contents']['front_rtl_css'] = $front_rtl_css;
                 }
                //front_loop_content update
                $front_loop_content = '{{if_condition_content_layout_type==2}}
                    <div class="dsg-2">
                    <a href="{{ampforwp_post_url}}">
                        <div class="cat-2-img">
                          <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                          <div class="cat-2-tlt">{{title}}</div>
                        </div>
                    </a></div>
                  {{ifend_condition_content_layout_type_2}}

                   {{if_condition_content_layout_type==3}}
                    <li> 
                      <div class="cat-3-img"> 
                        <a href="{{ampforwp_post_url}}"><amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}" layout="responsive"></amp-img></a> 
                      </div>
                      <div class="cat-3-tlt">
                        <a href="{{ampforwp_post_url}}">{{title}}</a>
                      </div>
                    </li>
                  {{ifend_condition_content_layout_type_3}}
                  {{if_condition_content_layout_type==4}}
                    <div class="dsg-4">
                    <a href="{{ampforwp_post_url}}">
                        <div class="cat-4-img">
                            <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                        </div> 
                        <div class="cat-ovly">
                            <div class="cat-4-artl">
                                <div class="cat-4-pt">
                                    <span class="pst-dt">{{postdate}}</span><span class="by">By</span><span class="pst-by">{{authorname}}</span>
                                </div>
                                <h2>{{title}}</h2>
                            </div>
                        </div>
                    </a>
                    </div>
                  {{ifend_condition_content_layout_type_4}}
                  {{if_condition_content_layout_type==5}}
                    <div class="dsg-5">
                        <div class="cat-5-artl">
                            <a href="{{ampforwp_post_url}}">
                                <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                                <h4>{{title}}</h4>
                            </a>
                        </div>
                        <div class="athr-dtls">
                            <a href="{{ampforwp_post_url}}">
                                By <span class="athr-nm">{{authorname}}</span>
                                <span class="athr-dt">{{postdate}}</span>
                            </a>
                        </div>
                        </a>
                    </div>
                  {{ifend_condition_content_layout_type_5}}
                  {{if_condition_content_layout_type==6}}
                    <li>
                        <div class="dsg-6">
                            <div class="c6-a">
                                <a href="{{ampforwp_post_url}}">
                                    <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                                </a>
                            </div>
                            <div class="c6-ad">
                                <a href="{{ampforwp_post_url}}">
                                    {{if_tags}}<span class="tag">{{tags}}</span>{{ifend_tags}}
                                    <h4>{{title}}</h4>
                                    <div class="at-ds">
                                        by <span class="at-n">{{authorname}}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                  {{ifend_condition_content_layout_type_6}}
                  {{if_condition_content_layout_type==7}}
                    <li>
                        <div class="dsg-7">
                            <div class="c7-img">
                                <a href="{{ampforwp_post_url}}">
                                    <amp-img  class="ampforwp_wc_shortcode_img"  src="{{image}}" width="{{width}}" height="{{height}}"  {{if_image_layout}}layout="{{image_layout}}"{{ifend_image_layout}}></amp-img> 
                                </a>
                            </div>
                            <div class="c7-cnt">
                            {{if_tags}}<span class="tag">{{tags}}</span>{{ifend_tags}}
                                <a href="{{ampforwp_post_url}}">{{title}}</a> 
                                {{excerptContent}}
                            </div>
                        </div>
                    </li>
                  {{ifend_condition_content_layout_type_7}}
                  ';
                $modules['contents']['front_loop_content'] .= $front_loop_content;

            }
        }
    }
        return $modules;
} // function closed


function updateImage_width_height($width,$height,$fieldValues){
    switch($fieldValues['content_layout_type']){
        case 2:
          $width = $fieldValues['img-width-2'];
          $height = $fieldValues['img-height-2'];
        break;
        case 3:
          $width = $fieldValues['img-width-3'];
          $height = $fieldValues['img-height-3'];
        break;
        case 4:
          $width = $fieldValues['img-width-4'];
          $height = $fieldValues['img-height-4'];
        break;
        case 5:
          $width = $fieldValues['img-width-5'];
          $height = $fieldValues['img-height-5'];
        break;
        case 6:
        $width = $fieldValues['img-width-6'];
        $height = $fieldValues['img-height-6'];
        break;
        case 7:
        $width = $fieldValues['img-width-7'];
        $height = $fieldValues['img-height-7'];
        break;
        default:
        break;
    }
    return array($width, $height);
}