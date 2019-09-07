<?php		
$frontCommonCss = '
.contents_presentation{line-height:0;}
@media(max-width:768px){
  .col-2{
    width:100%;
    float:none;
  }
}
                        
';
 $output = '{{if_condition_content_layout_type==1}}
             <div class="cntn-1">
             {{if_condition_check_for_content==1}}
                <div class="cntn-desc">
                  <h1>{{heading}}</h1>
                  {{content_title}}
                  <div class="prsn-btn">
                    <a href="{{btn_lnk}}">{{cntn_btn}}{{if_condition_check_for_icon==1}}<i class="ico-pic icon-{{icon-picker}}"></i>{{ifend_condition_check_for_icon_1}}</a>
                  </div>
                </div>
              {{ifend_condition_check_for_content_1}}
              {{if_condition_check_for_image==1}}
                <div class="cntn-img">
                  {{if_img_upload}}<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" layout="responsive" alt="{{image_alt}}"></amp-img>{{ifend_img_upload}}
                </div>
              {{ifend_condition_check_for_image_1}}
             </div>
            {{ifend_condition_content_layout_type_1}}
            {{if_condition_content_layout_type==2}}
            <div class="cntn-2">
              {{if_condition_check_for_content==1}}
              <div class="cntn-desc">
                <span class="sub-heading">{{sub_heading}}</span>
                <h1>{{heading}}</h1>
                {{content_title}}
                <div class="prsn-btn">
                  <a href="{{btn_lnk}}">{{cntn_btn}}{{if_condition_check_for_icon==1}}<i class="ico-pic icon-{{icon-picker}}"></i>{{ifend_condition_check_for_icon_1}}</a>
                </div>
              </div>
              {{ifend_condition_check_for_content_1}}
              {{if_condition_check_for_image==1}}
                <div class="cntn-img">
                  {{if_img_upload}}<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" layout="responsive" alt="{{image_alt}}"></amp-img>{{ifend_img_upload}}
                </div>
              {{ifend_condition_check_for_image_1}}
            </div>
            {{ifend_condition_content_layout_type_2}}
            {{if_condition_content_layout_type==3}}
            <div class="cntn-3">
              <div class="cntn-blk">
                <div class="cntn-desc">
                  <h1>{{heading}}</h1>
                  {{content_title}}
                  <div class="prsn-btn">
                    <a href="{{btn_lnk}}">{{cntn_btn}}{{if_condition_check_for_icon==1}}<i class="ico-pic icon-{{icon-picker}}"></i>{{ifend_condition_check_for_icon_1}}</a>
                  </div>
                </div>
                <div class="cntn-img">
                  {{if_img_upload}}<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" layout="responsive" alt="{{image_alt}}"></amp-img>{{ifend_img_upload}}
                </div>
              </div>
            </div>
            {{ifend_condition_content_layout_type_3}}
            {{if_condition_content_layout_type==4}}
            <div class="cntn-4">
              <div class="cntn-blk">
                <div class="cntn-desc">
                <span class="sub-heading">{{sub_heading}}</span>
                  <h1>{{heading}}</h1>
                  {{content_title}}
                  <div class="prsn-btn">
                    <a href="{{btn_lnk}}">{{cntn_btn}}{{if_condition_check_for_icon==1}}<i class="ico-pic icon-{{icon-picker}}"></i>{{ifend_condition_check_for_icon_1}}</a>
                  </div>
                </div>
              </div>
            </div>
            {{ifend_condition_content_layout_type_4}}
          ';
 

 $frontCss = '
{{if_condition_content_layout_type==1}}
{{module-class}} .cntn-1{
  display:flex;
  width:100%;
  align-items:center;
}
  {{if_condition_check_for_image==1}}
    {{module-class}} .cntn-img{
      width:{{img_width}};
      line-height:0;
      order:-1;
      margin:0 auto;
    }
    {{module-class}} .cntn-img amp-img{
      max-width:{{ampimg_width}};
      margin:0 auto;
    }
    {{module-class}} .cntn-img img{width:100%;height:auto;}
  {{ifend_condition_check_for_image_1}}
  {{if_condition_check_for_content==1}}
    {{module-class}} .cntn-desc{
      width:{{cntn_width}};
      color:{{cnt_color}};
      font-size:{{ctn-font-size}};
      font-weight: {{ctn-font_type}};
      text-align: {{align_type}};
      padding:{{padding_gap}};
      line-height:{{cnt-height}};
      margin:0 auto;
    }
    {{module-class}} .cntn-desc h1{
      font-size:{{font-size}};
      line-height:{{ln-height}};
      font-weight: {{font_type}};
      color:{{heading_color}};
      margin:{{hdng_gap}};
    }
    {{module-class}} .cntn-desc a{
      color:{{btn_color}};
      font-size:{{btn-font-size}};
      line-height:1.4;
      font-weight:{{btn_font_type}};
      {{if_condition_check_for_bgclr==0}}
        margin-top: 10px;
      {{ifend_condition_check_for_bgclr_0}}
      display:inline-block;
       {{if_condition_check_for_bgclr==1}}
        background:{{bg_clr}};
        border-radius:{{bord-rds}};
        padding:{{pdng_gap}};   
          {{if_condition_check_for_bxshd==1}}
            box-shadow: 0 5px 9px 0 rgba(0,0,0,.17);
          {{ifend_condition_check_for_bxshd_1}}
          {{if_condition_check_for_bdr==1}}
            border:1px solid {{btn_color}};
          {{ifend_condition_check_for_bdr_1}}
      {{ifend_condition_check_for_bgclr_1}}
    }
    {{if_condition_check_for_bgclr==1}}
      {{module-class}} .cntn-desc .prsn-btn{
        margin:{{mrgn_gap}};
      }
    {{ifend_condition_check_for_bgclr_1}}
    {{if_condition_check_for_icon==1}}
      {{module-class}} .cntn-desc .ico-pic{
        font-size: {{icon-size}};
        position: absolute;
        margin:{{margin_gap}};
      }
    {{ifend_condition_check_for_icon_1}}
  {{ifend_condition_check_for_content_1}}
@media(max-width:768px){
    {{module-class}} .cntn-1{
      display:inline-block;
    }
    {{module-class}} .cntn-img{
      width:100%;
      padding:0;
    }
    {{module-class}} .cntn-desc{
      width:100%;
      margin-bottom:40px;
      padding:0;
      text-align:center;
    }
}
{{ifend_condition_content_layout_type_1}}
{{if_condition_content_layout_type==2}}
{{module-class}} .cntn-2{
  display:flex;
  width:100%;
  align-items:center;
}
  {{if_condition_check_for_image==1}}
    {{module-class}} .cntn-img{
      width:{{img_width}};
      line-height:0;
      margin:0 auto;
    }
    {{module-class}} .cntn-img amp-img{
      max-width:{{ampimg_width}};
      margin:0 auto;
    }
    {{module-class}} .cntn-img img{width:100%;height:auto;}
  {{ifend_condition_check_for_image_1}}
  {{if_condition_check_for_content==1}}
    {{module-class}} .cntn-desc{
      width:{{cntn_width}};
      color:{{cnt_color}};
      padding:{{padding_gap}};
      font-size:{{ctn-font-size}};
      font-weight: {{ctn-font_type}};
      text-align: {{align_type}};
      line-height:{{cnt-height}};
      margin:0 auto;
    }
    {{module-class}} .cntn-desc h1{
      font-size:{{font-size}};
      line-height:{{ln-height}};
      font-weight: {{font_type}};
      margin:{{hdng_gap}};
      color:{{heading_color}};
    }
    {{module-class}} .sub-heading{
      font-size:{{sub-font-size}};    
      line-height:{{sbln_height}};
      font-weight:{{sub_font_type}};
      color:{{sub_heading_color}};
      margin: {{sub_hdng_gap}};
      display: inline-block;
    }
    {{module-class}} .cntn-desc a{
      color:{{btn_color}};
      font-size:{{btn-font-size}};
      line-height:1.4;
      font-weight:{{btn_font_type}};
      {{if_condition_check_for_bgclr==0}}
        margin-top: 10px;
      {{ifend_condition_check_for_bgclr_0}}
      display: inline-block;
      {{if_condition_check_for_bgclr==1}}
        background:{{bg_clr}};
        border-radius:{{bord-rds}};
        padding:{{pdng_gap}};   
          {{if_condition_check_for_bxshd==1}}
            box-shadow: 0 5px 9px 0 rgba(0,0,0,.17);
          {{ifend_condition_check_for_bxshd_1}}
          {{if_condition_check_for_bdr==1}}
            border:1px solid {{btn_color}};
          {{ifend_condition_check_for_bdr_1}}
      {{ifend_condition_check_for_bgclr_1}}
    }
    {{if_condition_check_for_bgclr==1}}
      {{module-class}} .cntn-desc .prsn-btn{
        margin:{{mrgn_gap}};
      }
    {{ifend_condition_check_for_bgclr_1}}
    {{if_condition_check_for_icon==1}}
      {{module-class}} .cntn-desc .ico-pic{
        font-size: {{icon-size}};
        position: absolute;
        margin:{{margin_gap}};
      }
    {{ifend_condition_check_for_icon_1}}
  {{ifend_condition_check_for_content_1}}
@media(max-width:768px){
  {{module-class}} .cntn-2{
      display:inline-block;
    }
    {{module-class}} .cntn-img{
      width:100%;
      padding:0;
      margin-top:30px;
    }
    {{module-class}} .cntn-desc{
      width:100%;
      padding:0;
    }
}
{{ifend_condition_content_layout_type_2}}
{{if_condition_content_layout_type==3}}
  {{module-class}} .cntn-3{
    width:100%;
    display:inline-block;
    padding:20px;
  }
  {{module-class}} .cntn-blk{
      width:100%;
      position:relative;
      background-color:{{background_clr}};
  }
  {{if_condition_check_for_content==1}}
    {{module-class}} .cntn-desc{
      width:100%;
      color:{{cnt_color}};
      font-size:{{ctn-font-size}};
      font-weight: {{ctn-font_type}};
      text-align: {{align_type}};
      padding:{{padding_gap}};
      position: absolute;
      z-index:2;
      line-height:{{cnt-height}};
    }
    {{module-class}} .cntn-desc h1{
        font-size:{{font-size}};
        line-height:{{ln-height}};
        font-weight: {{font_type}};
        margin:{{hdng_gap}};
        color:{{heading_color}};
    }
    {{module-class}} .cntn-desc a{
      color:{{btn_color}};
      font-size:{{btn-font-size}};
      line-height:1.4;
      font-weight:{{btn_font_type}};
      {{if_condition_check_for_bgclr==0}}
        margin-top: 15px;
      {{ifend_condition_check_for_bgclr_0}}
      display: inline-block;
       {{if_condition_check_for_bgclr==1}}
        background:{{bg_clr}};
        border-radius:{{bord-rds}};
        padding:{{pdng_gap}};   
          {{if_condition_check_for_bxshd==1}}
            box-shadow: 0 5px 9px 0 rgba(0,0,0,.17);
          {{ifend_condition_check_for_bxshd_1}}
      {{ifend_condition_check_for_bgclr_1}}
    }
    {{if_condition_check_for_bgclr==1}}
      {{module-class}} .cntn-desc .prsn-btn{
       margin:{{mrgn_gap}};
      }
    {{ifend_condition_check_for_bgclr_1}}
    {{if_condition_check_for_icon==1}}
      {{module-class}} .cntn-desc .ico-pic{
        font-size: {{icon-size}};
        position: absolute;
        margin:{{margin_gap}};
      }
    {{ifend_condition_check_for_icon_1}}
  {{ifend_condition_check_for_content_1}}
  {{if_condition_check_for_image==1}}
    {{module-class}} .cntn-img{
       width:100%;
       height:auto;
      line-height:0;
      padding-top:{{ampimg_adjust}};
    }
    {{module-class}} .cntn-img amp-img{
      max-width:{{ampimg_width}};
      margin:0 auto;
    }
    {{module-class}} .cntn-img img{width:100%;height:auto;}
  {{ifend_condition_check_for_image_1}}
@media(max-width:768px){
  
  {{module-class}} .cntn-3{
    padding:0;
  }
  {{module-class}} .cntn-desc{
    position:relative;
  }
  {{module-class}} .cntn-img{
    padding:0;
  }
  {{module-class}} .amppb-fluid{
    width:100%;
  }
}
{{ifend_condition_content_layout_type_3}}
{{if_condition_content_layout_type==4}}
 {{module-class}} .cntn-4{
    width:100%;
    display:inline-block;
  }
  {{module-class}} .cntn-blk{
    width:100%;
    position:relative;
    background-color: {{background_clr}};
  }
  {{if_condition_check_for_content==1}}
    {{module-class}} .cntn-desc{
      width:{{cntn_width}};
      color:{{cnt_color}};
      font-size:{{ctn-font-size}};
      font-weight: {{ctn-font_type}};
      text-align: {{align_type}};
      padding:{{padding_gap}};
      line-height:{{cnt-height}};
      margin:0 auto;
    }
    {{module-class}} .sub-heading{
      font-size:{{sub-font-size}};    
      line-height:{{sbln_height}};
      font-weight:{{sub_font_type}};
      color:{{sub_heading_color}};
      margin: {{sub_hdng_gap}};
      display: inline-block;
    }
    {{module-class}} .cntn-desc h1{
        font-size:{{font-size}};
        line-height:{{ln-height}};
        font-weight: {{font_type}};
        margin:{{hdng_gap}};
        color:{{heading_color}};
    }
    {{module-class}} .cntn-desc a{
      color:{{btn_color}};
      font-size:{{btn-font-size}};
      line-height:1.4;
      font-weight:{{btn_font_type}};
      {{if_condition_check_for_bgclr==0}}
        margin-top: 10px;
      {{ifend_condition_check_for_bgclr_0}}
      display: inline-block;
      {{if_condition_check_for_bgclr==1}}
        background:{{bg_clr}};
        border-radius:{{bord-rds}};
        padding:{{pdng_gap}};   
          {{if_condition_check_for_bxshd==1}}
            box-shadow: 0 5px 9px 0 rgba(0,0,0,.17);
          {{ifend_condition_check_for_bxshd_1}}
          {{if_condition_check_for_bdr==1}}
            border:1px solid {{btn_color}};
          {{ifend_condition_check_for_bdr_1}}
      {{ifend_condition_check_for_bgclr_1}}
    }
    {{if_condition_check_for_bgclr==1}}
      {{module-class}} .cntn-desc .prsn-btn{
        margin:{{mrgn_gap}};
      }
    {{ifend_condition_check_for_bgclr_1}}
    {{if_condition_check_for_icon==1}}
      {{module-class}} .cntn-desc .ico-pic{
        font-size: {{icon-size}};
        position: absolute;
        margin:{{margin_gap}};
      }
    {{ifend_condition_check_for_icon_1}}
  {{ifend_condition_check_for_content_1}}
  {{if_condition_check_for_image==1}}
    {{module-class}} .cntn-img{
      width:100%;
      height:auto;
      line-height:0;
    }
    {{module-class}} .cntn-img amp-img{
      max-width:{{ampimg_width}};
      margin:0 auto;
    }
    {{module-class}} .cntn-img img{width:100%;height:auto;}
  {{ifend_condition_check_for_image_1}}
@media(max-width:768px){
  {{module-class}} .cntn-4{
    padding:0;
  }
  {{module-class}} .cntn-desc{
    width:100%;
    padding:0;
  }
}
{{ifend_condition_content_layout_type_4}}
';

 return array(		
 		'label' =>'Presentation',		
 		'name' => 'contents_presentation',
    'default_tab'=> 'customizer',
    'tabs' => array(
              'customizer'=>'Content',
              'container_css'=>'Design',
              'advanced' => 'Advanced',
              'layout' => 'Layout'
            ),
 		'fields' => array(
            array(    
            'type'    =>'layout-image-picker',
            'name'    =>"content_layout_type",
            'label'   =>"Select Layout",
            'tab'     =>'layout',
            'default' =>'1',    
            'options_details'=>array(
                            array(
                              'value'=>'1',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUTS_URL.'/images/d-1.png'
                            ),
                            array(
                              'value'=>'2',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUTS_URL.'/images/d-2.png'
                            ),
                            array(
                              'value'=>'3',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUTS_URL.'/images/d-3.png'
                            ),
                            array(
                              'value'=>'4',
                              'label'=>'',
                              'demo_image'=> AMPFORWP_LAYOUTS_URL.'/images/d-4.png'
                            ),
                          ),
            'content_type'=>'html',
            ),
            array(
                'type'    =>'spacing',
                'name'    =>"margin_css",
                'label'   =>'Margin',
                'tab'   =>'advanced',
                'default' =>
                            array(
                                'top'=>'20px',
                                'right'=>'0px',
                                'bottom'=>'20px',
                                'left'=>'0px',
                            ),
                'content_type'=>'css',
              ),
              array(
                'type'    =>'spacing',
                'name'    =>"padding_css",
                'label'   =>'Padding',
                'tab'   =>'advanced',
                'default' =>array(
                          'left'=>'0px',
                          'right'=>'0px',
                          'top'=>'0px',
                          'bottom'=>'0px'
                        ),
                'content_type'=>'css',
              ),
              array(
                'type'    =>'checkbox_bool',
                'name'    =>"check_for_image",
                'label'   => 'Image',
                'tab'   =>'customizer',
                'default' =>1,
                'options' =>array(
                        array(
                          'label'=>'Yes',
                          'value'=>1,
                        )
                      ),
                'content_type'=>'html',
                'required'  => array( 'content_layout_type'=> array('1','2','3') )
              ),
            array(    
              'type'    =>'upload',   
              'name'    =>"img_upload",   
              'label'   =>'Upload Image',
              'tab'     =>'customizer',
              'default' =>'', 
              'content_type'=>'html',
              'required'  => array('check_for_image'=>'1', 'content_layout_type'=> array('1','2','3'))
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"img_width",   
              'label'   =>'Width',
              'tab'     =>'customizer',
              'default' =>'50%', 
              'content_type'=>'css',
              'required'  => array('check_for_image'=>'1', 'content_layout_type'=> array('1','2','3'))
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"ampimg_width",   
              'label'   =>'Image Wrapper',
              'tab'     =>'customizer',
              'default' =>'100%', 
              'content_type'=>'css',
              'required'  => array('check_for_image'=>'1', 'content_layout_type'=> array('1','2','3'))
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"ampimg_adjust",   
              'label'   =>'Image Adjustment',
              'tab'     =>'customizer',
              'default' =>'0%', 
              'content_type'=>'css',
              'required'  => array('check_for_image'=>'1', 'content_layout_type'=> array('1','2','3'))
            ),
            array(
                'type'    =>'checkbox_bool',
                'name'    =>"check_for_content",
                'label'   => 'Content',
                'tab'   =>'customizer',
                'default' =>1,
                'options' =>array(
                        array(
                          'label'=>'Yes',
                          'value'=>1,
                        )
                      ),
                'content_type'=>'html',
              ),
            array(    
              'type'    =>'text',   
              'name'    =>"cntn_width",   
              'label'   =>'Width',
              'tab'     =>'customizer',
              'default' =>'50%', 
              'content_type'=>'css',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"sub_heading",   
              'label'   =>'Sub Heading',
              'tab'     =>'customizer',
              'default' =>'', 
              'content_type'=>'html',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"heading",   
              'label'   =>'Heading',
              'tab'     =>'customizer',
              'default' =>'Heading', 
              'content_type'=>'html',
              'required'  => array('check_for_content'=>'1')
            ),
            array(
                'type'    =>'spacing',
                'name'    =>"padding_gap",
                'label'   =>'Gapping',
                'tab'   =>'customizer',
                'default' =>
                            array(
                                'top'=>'0px',
                                'right'=>'0px',
                                'bottom'=>'0px',
                                'left'=>'0px',
                            ),
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),        
            array(    
              'type'    =>'text',   
              'name'    =>"font-size",   
              'label'   =>'Heading Font Size',
              'tab'     =>'container_css',
              'default' =>'40px', 
              'content_type'=>'css',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
                'type'    =>'text',   
                'name'    =>"ln-height",    
                'label'   =>'Line Height',
                'tab'     =>'container_css',
                'default' =>'1.2',  
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
                'type'  =>'select',   
                'name'  =>'font_type',    
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
                'required'  => array('check_for_content'=>'1')
              ),
            array(
                'type'    =>'spacing',
                'name'    =>"hdng_gap",
                'label'   =>'Title Gapping',
                'tab'   =>'container_css',
                'default' =>
                            array(
                                'top'=>'0px',
                                'right'=>'0px',
                                'bottom'=>'15px',
                                'left'=>'0px',
                            ),
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
              array(    
              'type'    =>'text',   
              'name'    =>"sub-font-size",
              'label'   =>'Sub Heading Font Size',
              'tab'     =>'container_css',
              'default' =>'18px', 
              'content_type'=>'css',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
                'type'    =>'text',   
                'name'    =>"sbln_height",    
                'label'   =>'Line Height',
                'tab'     =>'container_css',
                'default' =>'1.2',  
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
                'type'  =>'select',   
                'name'  =>'sub_font_type',    
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
                'required'  => array('check_for_content'=>'1')
              ),
              array(
                'type'    =>'spacing',
                'name'    =>"sub_hdng_gap",
                'label'   =>'Sub Heading Gapping',
                'tab'   =>'container_css',
                'default' =>
                            array(
                                'top'=>'0px',
                                'right'=>'0px',
                                'bottom'=>'10px',
                                'left'=>'0px',
                            ),
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),    			
            array(    
                'type'    =>'text-editor',    
                'name'    =>"content_title",    
                'label'   =>'Content',
                'tab'     =>'customizer',
                'default' =>'Write your content in Text Editor',  
                'content_type'=>'html',
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
              'type'    =>'text',   
              'name'    =>"ctn-font-size",   
              'label'   =>'Content Font Size',
              'tab'     =>'container_css',
              'default' =>'16px', 
              'content_type'=>'css',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
                'type'    =>'text',   
                'name'    =>"cnt-height",    
                'label'   =>'Content Line Height',
                'tab'     =>'container_css',
                'default' =>'1.5',  
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
                'type'  =>'select',   
                'name'  =>'ctn-font_type',    
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
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
              'type'    =>'text',   
              'name'    =>"cntn_btn",   
              'label'   =>'Button',
              'tab'     =>'customizer',
              'default' =>'Button', 
              'content_type'=>'html',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
              'type'    =>'text',   
              'name'    =>"btn_lnk",   
              'label'   =>'Button Link',
              'tab'     =>'customizer',
              'default' =>'#', 
              'content_type'=>'html',
              'required'  => array('check_for_content'=>'1')
            ),
            array(
                'type'    =>'checkbox_bool',
                'name'    =>"check_for_icon",
                'label'   => 'Icon',
                'tab'   =>'customizer',
                'default' =>0,
                'options' =>array(
                        array(
                          'label'=>'Yes',
                          'value'=>1,
                        )
                      ),
                'content_type'=>'html',
              ),
            array(    
                'type'    =>'icon-selector',    
                'name'    =>"icon-picker",    
                'label'   =>'Icon',
                'tab'       =>'customizer',
                'default' =>'check_circle', 
                'content_type'=>'html',
                'required'  => array('check_for_content'=>'1', 'check_for_icon'=>'1')
              ),
            array(    
                'type'  =>'select',   
                'name'  =>'align_type',   
                'label' =>"Align",
                'tab'     =>'container_css',
                'default' =>'center',
                'options_details'=>array(
                          'center'    =>'Center',
                          'left'      =>'Left',
                          'right'     =>'Right',),
                'content_type'=>'css',
              ),
              array(    
                  'type'    =>'text',   
                  'name'    =>"icon-size",    
                  'label'   =>'Icon Size',
                  'tab'     =>'container_css',
                  'default' =>'24px', 
                  'content_type'=>'css',
                  'required'  => array('check_for_icon'=>'1')
                ),
              array(
                  'type'    =>'spacing',
                  'name'    =>"margin_gap",
                  'label'   =>'Icon Adjustment',
                  'tab'     =>'container_css',
                  'default' =>
                              array(
                                'top'=>'0px',
                                'right'=>'0px',
                                'bottom'=>'0px',
                                'left'=>'0px',
                            ),
                  'content_type'=>'css',
                  'required'  => array('check_for_icon'=>'1')
                ),
              array(
                'type'    =>'color-picker',
                'name'    =>"sub_heading_color",
                'label'   =>'SubHeading Color',
                'tab'   =>'container_css',
                'default' =>'#000',
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),  
            array(
                'type'    =>'color-picker',
                'name'    =>"heading_color",
                'label'   =>'Heading Color',
                'tab'   =>'container_css',
                'default' =>'#000',
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(
                'type'    =>'color-picker',
                'name'    =>"cnt_color",
                'label'   =>'Content Color',
                'tab'   =>'container_css',
                'default' =>'#000',
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(
                'type'    =>'color-picker',
                'name'    =>"btn_color",
                'label'   =>'Button Color',
                'tab'   =>'container_css',
                'default' =>'#0070c9',
                'content_type'=>'css',
                'required'  => array('check_for_content'=>'1')
              ),
            array(    
              'type'    =>'text',   
              'name'    =>"btn-font-size",   
              'label'   =>'Button Font Size',
              'tab'     =>'container_css',
              'default' =>'18px', 
              'content_type'=>'css',
              'required'  => array('check_for_content'=>'1')
            ),
            array(    
                'type'  =>'select',   
                'name'  =>'btn_font_type',    
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
                'required'  => array('check_for_content'=>'1')
              ),
            array(
                  'type'      =>'checkbox_bool',
                  'name'      =>"check_for_bgclr",
                  'label'     =>'Button Background',
                  'tab'       =>'container_css',
                  'default'   =>0,
                  'options'   =>array(
                                  array(
                                      'label'=>'Yes',
                                      'value'=>1,
                                  )
                              ),
                  'content_type'=>'html',
              ),
                array(
                    'type'    =>'color-picker',
                    'name'    =>"bg_clr",
                    'label'   =>'Background Color',
                    'tab'   =>'container_css',
                    'default' =>'#fff',
                    'content_type'=>'css',
                    'required'  => array( 'check_for_bgclr'=>'1')
                  ),
                array(
                    'type'    =>'checkbox_bool',
                    'name'    =>"check_for_bdr",
                    'label'   => 'Border',
                    'tab'     =>'container_css',
                    'default' =>0,
                    'options' =>array(
                            array(
                              'label'=>'Yes',
                              'value'=>1,
                            )
                          ),
                    'content_type'=>'css',
                    'required'  => array( 'check_for_bgclr'=>'1')
                  ),
                array(    
                    'type'    =>'text',   
                    'name'    =>"bord-rds",   
                    'label'   =>'Border Radius',
                    'tab'     =>'container_css',
                    'default' =>'3px', 
                    'content_type'=>'css',
                    'required'  => array('check_for_bgclr'=>'1')
                  ),
                array(
                  'type'    =>'spacing',
                  'name'    =>"mrgn_gap",
                  'label'   =>'Button Margin',
                  'tab'     =>'container_css',
                  'default' =>
                              array(
                                'top'=>'40px',
                                'right'=>'0px',
                                'bottom'=>'0px',
                                'left'=>'0px',
                            ),
                  'content_type'=>'css',
                  'required'  => array('check_for_bgclr'=>'1')
                ),
                array(
                  'type'    =>'spacing',
                  'name'    =>"pdng_gap",
                  'label'   =>'Button Padding',
                  'tab'     =>'container_css',
                  'default' =>
                              array(
                                'top'=>'16px',
                                'right'=>'40px',
                                'bottom'=>'16px',
                                'left'=>'40px',
                            ),
                  'content_type'=>'css',
                  'required'  => array('check_for_bgclr'=>'1')
                ),
                array(
                    'type'      =>'checkbox_bool',
                    'name'      =>"check_for_bxshd",
                    'label'     =>'Box shadow',
                    'tab'       =>'container_css',
                    'default'   =>0,
                    'options'   =>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                    )
                                ),
                    'content_type'=>'html',
                    'required'  => array('check_for_bgclr'=>'1')
                  ),
            array(
                'type'    =>'color-picker',
                'name'    =>"background_clr",
                'label'   =>'Background Color',
                'tab'   =>'container_css',
                'default' =>'#fff',
                'content_type'=>'css',
                'required'  => array( 'content_layout_type'=>array('3','4') )
              ),
            
 					),		
 		'front_template'=> $output,
    'front_css'=>$frontCss,
    'front_common_css'=>$frontCommonCss,	
 );