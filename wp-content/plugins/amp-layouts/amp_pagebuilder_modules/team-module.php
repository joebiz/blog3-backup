<?php		
$frontCommonCss = '';
 $output = '
          <div class="team-mod">
              <h1>Our Team</h1>
              <div class="tm-blk">
                {{repeater}}
              </div>
          </div>
          ';
 $frontCss = '
{{module-class}}{
  margin:{{margin_css}};
  padding:{{padding_css}};
}
.team-mod{
  width:100%;
  display:inline-block;
}
.team-mod h1{
  font-size:{{hd_size}};
  line-height:1.4;
  font-weight:{{fnt_wght}};
  color:{{hd_color}};
  text-align:center;
  margin-bottom:35px;
}
.tm-blk{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 40px 20px;
    height: 100%;
}
.tm-lst{
  width:100%;
}
.tm-imgs{
  float:left;
  margin-right:20px;
  width:110px;
    height:134px;
}
.tm-imgs amp-img{
  width:100%;
  height:auto;
  border-radius: 50%;
}
.tm-cntn{
  font-size:{{cntn-size}};
  color:{{cntn_color}};
  font-style: italic;
  font-weight:500;
  line-height: 1.4;
}
.tm-cntn .tm-txt{
  font-size:{{athr_size}};
  color:{{athr_color}};
  font-weight:{{athr_wght}};
  font-style: normal;
}
.tm-cntn span{
  font-size:{{desg_size}};
  color:{{desg_color}};
  font-weight:{{desg_wght}};
  margin-bottom:10px;
  display:inline-block;
  font-style: normal;
}
.tm-cntn a{
  text-decoration:underline;
}
@media(max-width:768px){
.tm-blk{
  width:100%;
  grid-template-columns: 1fr;
}
}
@media(max-width:425px){
.tm-imgs {
    width: 50px;
}
}
';

 return array(		
 		'label' =>'Team',		
 		'name' => 'team',
    'default_tab'=> 'customizer',
    'tabs' => array(
              'customizer'=>'Content',
              'container_css'=>'Design',
              'advanced' => 'Advanced',
            ),
 		'fields' => array(
                  array(    
                        'type'    =>'text',   
                        'name'    =>"team_tlt",    
                        'label'   =>'Heading',
                        'tab'      =>'customizer',
                        'default'  =>'Heading', 
                        'content_type'=>'html',
                      ),
                  array(
                      'type'    =>'text',
                      'name'    =>"hd_size",
                      'label'   =>'Heading Font Size',
                      'tab'   =>'container_css',
                      'default' =>'35px',
                      'content_type'=>'css'
                    ),
                  array(    
                      'type'  =>'select',   
                      'name'  =>'fnt_wght',   
                      'label' =>"Heading Font Weight",
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
                    ),
                  array(
                    'type'    =>'color-picker',
                    'name'    =>"hd_color",
                    'label'   =>'Heading Color',
                    'tab'   =>'container_css',
                    'default' =>'#25324c',
                    'content_type'=>'css'
                  ),
                  array(
                      'type'    =>'text',
                      'name'    =>"athr_size",
                      'label'   =>'Author Font Size',
                      'tab'   =>'container_css',
                      'default' =>'24px',
                      'content_type'=>'css'
                    ),
                  array(    
                      'type'  =>'select',   
                      'name'  =>'athr_wght',   
                      'label' =>"Author Font Weight",
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
                    ),
                  array(
                    'type'    =>'color-picker',
                    'name'    =>"athr_color",
                    'label'   =>'Author Color',
                    'tab'   =>'container_css',
                    'default' =>'#222',
                    'content_type'=>'css'
                  ),
                  array(
                      'type'    =>'text',
                      'name'    =>"desg_size",
                      'label'   =>'Designation Font Size',
                      'tab'   =>'container_css',
                      'default' =>'20px',
                      'content_type'=>'css'
                    ),
                  array(    
                      'type'  =>'select',   
                      'name'  =>'desg_wght',   
                      'label' =>"Designation Font Weight",
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
                    ),
                  array(
                    'type'    =>'color-picker',
                    'name'    =>"desg_color",
                    'label'   =>'Designation Color',
                    'tab'   =>'container_css',
                    'default' =>'#5e739d',
                    'content_type'=>'css'
                  ),
                  array(
                      'type'    =>'text',
                      'name'    =>"cntn-size",
                      'label'   =>'Content Font Size',
                      'tab'   =>'container_css',
                      'default' =>'18px',
                      'content_type'=>'css'
                    ),
                  array(
                    'type'    =>'color-picker',
                    'name'    =>"cntn_color",
                    'label'   =>'Content Color',
                    'tab'   =>'container_css',
                    'default' =>'#5e739d',
                    'content_type'=>'css'
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
 					      ),		
 		'front_template'=> $output,
    'front_css'=>$frontCss,
    'front_common_css'=>$frontCommonCss,
    'repeater'=>array(
          'tab'=>'customizer',
          'fields'=>array(
                        array(    
                            'type'    =>'upload',   
                            'name'    =>"img_upload",   
                            'label'   =>'Image',
                            'tab'     =>'customizer',
                            'default' =>'', 
                            'content_type'=>'html',
                          ),
                        array(    
                            'type'    =>'text',   
                            'name'    =>"athr_name",    
                            'label'   =>'Author Name',
                            'tab'      =>'customizer',
                            'default'  =>'Author Name', 
                            'content_type'=>'html',
                          ),
                        array(    
                            'type'    =>'text',   
                            'name'    =>"athr_desg",    
                            'label'   =>'Designation',
                            'tab'     =>'customizer',
                            'default' =>'Designation', 
                            'content_type'=>'html',
                          ),
                      array(    
                          'type'    =>'text-editor',    
                          'name'    =>"athr_content",    
                          'label'   =>'Content',
                          'tab'     =>'customizer',
                          'default' =>'Your Content',  
                          'content_type'=>'html',
                        ),
                    
              ),
            'front_template'=>
              '<div class="tm-lst">
                <div class="tm-imgs">
                  {{if_img_upload}}<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" layout="responsive" alt="{{image_alt}}"></amp-img>{{ifend_img_upload}}
                </div> 
                <div class="tm-cntn">
                  <h3 class="tm-txt">{{athr_name}}</h3>
                  <span>{{athr_desg}}</span>
                  {{athr_content}}
                </div>
              </div>
              '
          ),

 );