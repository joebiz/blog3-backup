<?php
/*
Plugin Name: AMP Layouts
Plugin URI: https://ampforwp.com/amp-layouts
Description: AMP for WP - Accelerated Mobile Pages for WordPress
Version: 1.4.5
Author: Ahmed Kaludi, Mohammed Kaludi
Author URI: https://ampforwp.com/
Donate link: https://www.paypal.me/Kaludi/25
License: GPL2+
Text Domain: amp-layouts
*/

define( 'AMPFORWP_PAGE_BUILDER_LAYOUT', plugin_dir_path(__FILE__) );
if(!defined('AMPFORWP_PLUGIN_DIR_URI_LAYOUTS')){
    define( 'AMPFORWP_PLUGIN_DIR_URI_LAYOUTS', realpath(plugin_dir_url(__FILE__)."../accelerated-mobile-pages/"));
}
define('AMPFORWP_LAYOUTS_URL',plugin_dir_url(__FILE__));
define( 'AMPFORWP_LAYOUT_MAIN_PLUGIN_DIR_URI', AMPFORWP_PLUGIN_DIR_URI_LAYOUTS );
define('AMPFORWP_LAYOUT_DIR_URI', plugin_dir_url(__FILE__));
define( 'AMPFORWP_PAGE_BUILDER_MODULE_PATH', plugin_dir_path(__FILE__)."amp_pagebuilder_modules" );

if ( ! defined( 'AMP_LAYOUTS_VERSION' ) ) {
    define( 'AMP_LAYOUTS_VERSION', '1.4.5' );
}
// this is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'AMP_LAYOUTS_STORE_URL', 'https://accounts.ampforwp.com/' ); // you should use your own CONSTANT name, and be sure to replace it throughout this file

// the name of your product. This should match the download name in EDD exactly


// the download ID. This is the ID of your product in EDD and should match the download ID visible in your Downloads list (see example below)
//define( 'AMPFORWP_ITEM_ID', 2502 );
// the name of the settings page for the license input to be displayed
define( 'AMP_LAYOUTS_LICENSE_PAGE', 'amp-layouts-license' );
define( 'AMP_LAYOUTS_ITEM_NAME', 'AMP Layouts' );
if(! defined('AMP_LAYOUT_ITEM_FOLDER_NAME')){
    $folderName = basename(__DIR__);
    define( 'AMP_LAYOUT_ITEM_FOLDER_NAME', $folderName );
}

//Fields to be exports

class AmpforwpAmpLayouts{
   public $ampforwp_exportDetails = array();

    public function __construct(){
        if(is_admin()){
            add_filter( 'redux/redux_builder_amp/field/class/amp_layouts',array($this,'amp_layout_field_path') ); // Adds the local field
            add_filter( 'redux/options/redux_builder_amp/sections', array($this, 'amplayout_pro_widgets_fields'),7,1 );
           
            add_action( "wp_ajax_ampforwp_theme_redux_download_theme-redux_builder_amp",  array($this, "swiftOptionsDownload") );
            add_action( "wp_ajax_nopriv_ampforwp_theme_redux_download_theme-redux_builder_amp",  array($this, "swiftOptionsDownload") );

            //To Export Data
            add_filter( 'redux/options/redux_builder_amp/register', array($this, 'get_sctions_options') , 9,1);
        }

        if(is_admin()){
            add_filter("ampforwp_pagebuilder_layout_filter", array($this, "ampforwpLoadNewLayouts"), 9, 1);
           
        }
         


    }

    public function amp_layout_field_path($field) {
        return dirname(__FILE__).'/amp_layouts/field_amp_layouts.php';
    }

    public function amplayout_pro_widgets_fields( $sections) {
        //swift theme layouts
         $dir = AMPFORWP_PAGE_BUILDER_LAYOUT.'/amp_swift_admin_layouts/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                 $layOutPreview = array();
                while (($layoutfile = readdir($dh)) !== false) {
                    if(is_file($dir.$layoutfile) && strpos($layoutfile, 'swift-layout.php') == true){
                        $layOutPreview[str_replace(".php", "", $layoutfile)] = include $dir.$layoutfile;
                    }
                }
               closedir($dh);

            }
        }
          ampforwp_array_sort_by_column($layOutPreview, 'position', SORT_DESC);
        $opt_name = 'redux_builder_amp';
        $field1 = array(
                    'section_id' => 'amp-theme-settings',
                    'priority'  => '1',
                    'class'=> 'amp_layouts_container',

                    'id' => 'ampforwp_themes_swift_layout_head',
                    'type' => 'section',
                    'title' => __('AMP Layouts', 'accelerated-mobile-pages'),
                    'indent' => true,
            );
        $field = array(

            'section_id' => 'amp-theme-settings',
            'priority'  => '1',
            'class'=> 'amp_layouts_container',

            'id'=> 'ampforwp_themes_swift_layout', 
            "type"=>"amp_layouts",
            'title'=>"Swift theme Layouts",
            'default' => '',
            'layouts'=>$layOutPreview,
            'required' => array('amp-design-selector', '=' , '4'),
        );
        $headeroption = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',

            'id'=> 'ampforwp_themes_swift_h4dropmenu', 
            "type"=>"switch",
            'title'=>"Dropdown Support",
            'default' => 0,
            'required' => array(
                array('header-type', '=' , array('4','5','6','7') ),
                array('customize-options', '=' , '1'),
                ),
        );
        $submenucolor = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'swift_h4submenu_txtcolor', 
            "type"          =>"color_rgba",
            'title'         =>"Desktop Sub Menu Text Color",
            'default'       => array(
                                'color'  => '#f1f1f1',
                                ),
            'required'      => array(
                                array('header-type', '=' , array('4','5','6','7') ),
                                array('customize-options', '=' , '1'),
                                array('ampforwp_themes_swift_h4dropmenu', '=' , '1'),
                                ),
        );
        $submenubgcolor = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'swift_h4submenu_bgcolor', 
            "type"          =>"color_rgba",
            'title'         =>"Desktop Sub Menu Background Color",
            'default'       => array(
                                'color'  => '#182733',
                                ),
            'required'      => array(
                                array('header-type', '=' , array('4','5','6','7') ),
                                array('customize-options', '=' , '1'),
                                array('ampforwp_themes_swift_h4dropmenu', '=' , '1'),
                                ),
        );
        $submenubdrcolor = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'swift_h4submenu_bdrcolor', 
            "type"          =>"color_rgba",
            'title'         =>"Desktop Sub Menu Border Color",
            'default'       => array(
                                'color'  => '#4B4F53',
                                ),
            'required'      => array(
                                array('header-type', '=' , array('4','5','6','7') ),
                                array('customize-options', '=' , '1'),
                                array('ampforwp_themes_swift_h4dropmenu', '=' , '1'),
                                ),
        );
        $submenufntsz = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'swift_h4submenu_sbfz', 
            "type"          =>"text",
            'title'         =>"Desktop Sub Menu Font Size",
            'default'       => '14px',
            'required'      => array(
                                array('header-type', '=' , array('4') ),
                                array('customize-options', '=' , '1'),
                                array('ampforwp_themes_swift_h4dropmenu', '=' , '1'),
                                ),
        );
        $submenualign = array(
           'section_id' => 'amp-theme-header-settings',
           'priority'  => '1',
           'class'=> '',
           'id'    => 'swift_h4submenu_align',
           'title'  => __('Desktop Sub Menu Alignment', 'accelerated-mobile-pages'),
           'type'   => 'select',
           'options'=> array(
                '1' =>  'Center',
                '2' =>  'Left',
                '3' =>  'Right'
            ),
           'default'=> '1',
           'required' => array(
            array('header-type', '=' , array('4') ),
            array('customize-options','=','1'),
            array('ampforwp_themes_swift_h4dropmenu', '=' , '1'),
            )    
        );
        $hmbrdwd = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'swift_hm_bdr_wdth', 
            "type"=>"text",
            'title'=>"Hamberger Menu Border Width",
            'default' => '2px',
            'required' => array(
                array('menu-type', '=' , array('4') ),
                array('customize-options', '=' , '1'),
                ),
        );
        $hmbdrclr = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'swift_hm_bdr_clr', 
            "type"          =>"color_rgba",
            'title'         =>"Hamberger Menu Border Color",
            'default'       => array(
                                'color'  => 'rgba(238,238,238,1)',
                                ),
            'required'      => array(
                                array('menu-type', '=' , array('4') ),
                                array('customize-options', '=' , '1'),
                                ),
        );
        $menuposition = array(
           'section_id' => 'amp-theme-header-settings',
           'priority'  => '1',
           'class'=> '',
           'id'    => 'ampforwp_themes_swift_h4menu_position',
           'title'  => __('Desktop Menu Alignment (Header 4)', 'accelerated-mobile-pages'),
           'type'   => 'select',
           'options'=> array(
                '1' =>  'Center',
                '2' =>  'Left',
                '3' =>  'Right'
            ),
           'default'=> '1',
           'required' => array(
            array('header-type', '=' , array('4','5','6','7') ),
            array('customize-options','=','1'),
            )    
        );
        $menucolor = array(
            'section_id'    => 'amp-theme-header-settings',
            'priority'      => '1',
            'class'         => '',
            'id'            => 'ampforwp_themes_swift_h4menu_color', 
            "type"          =>"color_rgba",
            'title'         =>"Desktop Menu Color",
            'default'       => array(
                                'color'  => '#111',
                                ),
            'required'      => array(
                                array('header-type', '=' , array('4','5','6','7') ),
                                array('customize-options', '=' , '1'),
                                ),
        );
        $menulabel = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'swift_h7_menulabel', 
            "type"=>"text",
            'title'=>"Menu Label",
            'default' => 'Add Menu Label Here',
            'required' => array(
                array('header-type', '=' , '7'),
                array('customize-options', '=' , '1'),
                ),
        );
        $headerbxs = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4bxs', 
            "type"=>"switch",
            'title'=>"Header 4 Boxshadow",
            'default' => 0,
            'required' => array(
                array('header-type', '=' , array('4','5','6','7') ),
                array('customize-options', '=' , '1'),
                ),
        );
        $headercta = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta', 
            "type"=>"switch",
            'title'=>"Call to Action",
            'default' => 0,
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                ),
        );
        $ctaposition = array(
           'section_id' => 'amp-theme-header-settings',
           'priority'  => '1',
           'class'=> '',
           'id'    => 'ampforwp_themes_swift_h4cta_position_type',
           'title'  => __('CTA Position', 'accelerated-mobile-pages'),
           'type'   => 'select',
           'options'=> array(
                '1' =>  'With in the Header',
                '2' =>  'Below the Header'
            ),
           'default'=> '1',
          'required' => array(
            array('header-type', '=' , '4','7'),
            array('customize-options','=','1'),
            array('ampforwp_themes_swift_h4cta', '=' , '1'),
            )    
        );
        $ctatext = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_text', 
            "type"=>"text",
            'title'=>"Text",
            'default' => 'Add Text Here',
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctatxtcolor = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_txtcolor', 
            "type"=>"color_rgba",
            'title'=>"Text Color",
            'default' => array(
                        'color'  => '#fff',
                     ),
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctalink = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_link', 
            "type"=>"text",
            'title'=>"Link",
            'default' => '#',
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctabgcolor = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_color', 
            "type"=>"color_rgba",
            'title'=>"Background",
            'default' => array(
                        'color'  => '#fcc118',
                     ),
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctabrdrds = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_brdrds', 
            "type"=>"text",
            'title'=>"Border Radius",
            'default' => '60',
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctabrdgp = array(
            'section_id'     => 'amp-theme-header-settings',
            'priority'       => '1',
            'id'             => 'ampforwp_themes_swift_h4cta_brdgpg', 
            'type'           => 'spacing',
            'mode'           => 'padding',
            'units'          => array('px','%'),
            'units_extended' => 'false',
            'title'          => __('Border Gapping', 'accelerated-mobile-pages'),
            'default'            => array(
                'padding-top'     => '10px', 
                'padding-right'   => '20px', 
                'padding-bottom'  => '10px', 
                'padding-left'    => '20px',
                'units'          => 'px', 
            ),
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),      
        );
        $ctaborder = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta-brdr', 
            "type"=>"switch",
            'title'=>"Border",
            'default' => 0,
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta', '=' , '1'),
                ),
        );
        $ctabrdrcolor = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4cta_brdrcolor', 
            "type"=>"color_rgba",
            'title'=>"Border Color",
            'default' => array(
                        'color'  => '#fff',
                     ),
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta-brdr', '=' , '1'),
                ),
        );
        $ctabrdrw = array(
            'section_id' => 'amp-theme-header-settings',
            'priority'  => '1',
            'class'=> '',
            'id'=> 'ampforwp_themes_swift_h4ctabrdrwd', 
            "type"=>"text",
            'title'=>"Border Width",
            'default' => 1,
            'required' => array(
                array('header-type', '=' , '4','7'),
                array('customize-options', '=' , '1'),
                array('ampforwp_themes_swift_h4cta-brdr', '=' , '1'),
                ),
        );
        foreach ($sections as $key => $section_value) {
            if($section_value['id']=='amp-theme-settings'){
                $sections[$key]['fields'][] =  $field1;
                $sections[$key]['fields'][] =  $field;
            }
            if($section_value['id']=='amp-theme-header-settings'){
                $sections[$key]['fields'][] =  $hmbrdwd;
                $sections[$key]['fields'][] =  $hmbdrclr;
                $sections[$key]['fields'][] =  $menuposition;
                $sections[$key]['fields'][] =  $menucolor; 
                $sections[$key]['fields'][] =  $menulabel; 
                $sections[$key]['fields'][] =  $headerbxs;
                $sections[$key]['fields'][] =  $headeroption;
                $sections[$key]['fields'][] =  $submenucolor;
                $sections[$key]['fields'][] =  $submenubgcolor;
                $sections[$key]['fields'][] =  $submenubdrcolor;
                $sections[$key]['fields'][] =  $submenufntsz;
                $sections[$key]['fields'][] =  $submenualign;
                $sections[$key]['fields'][] =  $headercta;
                $sections[$key]['fields'][] =  $ctaposition;
                $sections[$key]['fields'][] =  $ctatext;
                $sections[$key]['fields'][] =  $ctatxtcolor;
                $sections[$key]['fields'][] =  $ctalink;
                $sections[$key]['fields'][] =  $ctabgcolor;
                $sections[$key]['fields'][] =  $ctaborder;
                $sections[$key]['fields'][] =  $ctabrdrcolor;
                $sections[$key]['fields'][] =  $ctabrdrw;
                $sections[$key]['fields'][] =  $ctabrdrds;
                $sections[$key]['fields'][] =  $ctabrdgp;
            }
        }
        //print_r($sections);die;
        return $sections;
    }

    public function swiftOptionsDownload(){
        if ( ! isset( $_GET['secret'] ) || $_GET['secret'] != md5( md5( AUTH_KEY . SECURE_AUTH_KEY ) . '-redux_builder_amp' ) ) {
            wp_die( 'Invalid Secret for options use' );
            exit;
        }
        global $redux_builder_amp;

        add_filter( 'redux/options/redux_builder_amp/register', array($this, 'get_sctions_options') , 9,1);
        
        $backup_options = array_intersect_key($redux_builder_amp, $this->ampforwp_exportDetails);
        // No need to escape this, as it's been properly escaped previously and through json_encode
        
        $content = json_encode( $backup_options );//stripslashes( json_encode( $backup_options ) ) ;
        if ( isset( $_GET['action'] ) && $_GET['action'] == 'ampforwp_theme_redux_download_theme-redux_builder_amp' ) {
            header( 'Content-Description: File Transfer' );
            header( 'Content-type: application/txt' );
            header( 'Content-Disposition: attachment; filename="theme_redux_options_redux_builder_amp_backup_' . date( 'd-m-Y' ) . '.json"' );
            header( 'Content-Transfer-Encoding: binary' );
            header( 'Expires: 0' );
            header( 'Cache-Control: must-revalidate' );
            header( 'Pragma: public' );

            echo $content;
            exit;
        } else {
            header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
            header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
            header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );
            header( 'Cache-Control: no-store, no-cache, must-revalidate' );
            header( 'Cache-Control: post-check=0, pre-check=0', false );
            header( 'Pragma: no-cache' );

            // Can't include the type. Thanks old Firefox and IE. BAH.
            header("Content-type: application/json");
            echo $content;
            exit;
        }
    }

    public function get_sctions_options($fields){
        $export_sections = array(
                                'amp-theme-settings',
                                'amp-theme-typography',
                                'amp-theme-global-subsection',
                                'amp-theme-header-settings',
                                'amp-theme-homepage-settings',
                                'amp-single',
                                'amp-theme-footer-settings',
                                'amp-theme-page-settings',
                                'amp-social',
                                'ampforwp-date-section',
                                'amp-design',
                            );
        $excludeFields = array('google_font_api_key');
        $ids = array();
        if(isset($fields) && is_array($fields)) {
            foreach( $fields as $fieldSection ) {
                if(in_array($fieldSection['id'], $export_sections) && isset( $fieldSection['fields'] ) && is_array($fieldSection['fields'])){
                    foreach($fieldSection['fields'] as $field){
                        if(!in_array($field['id'], $excludeFields))
                        $ids[$field['id']] = '';
                    }
                }
            }
        }
        $this->ampforwp_exportDetails = $ids;
    }

    function ampforwpLoadNewLayouts($layouts){
        $dir = AMPFORWP_PAGE_BUILDER_LAYOUT.'/amp_pagebuilder_layouts/';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {

                while (($file = readdir($dh)) !== false) {
                    if(is_dir($dir.$file) && strpos($file, '-layouts') == true){
                        $layoutTemplate[str_replace('-layouts', "", $file)] = array();
                        $layoutdir = $dir.$file."/";
                        if ($dhInside = opendir($layoutdir)) {
                            $layOutPreview = "";
                            while (($layoutfile = readdir($dhInside)) !== false) {
                                if(is_file($layoutdir.$layoutfile) && strpos($layoutfile, '-layout.php') == true){
                                    $layoutTemplate[str_replace('-layouts', "", $file)][str_replace(".php", "", $layoutfile)] = include $layoutdir.$layoutfile;
                                }
                            }
                            closedir($dhInside);
                        }
                    }
                    
                }
                closedir($dh);
                $layouts = array_merge($layouts,$layoutTemplate);
            }
        }
        return $layouts;
    }

}

new AmpforwpAmpLayouts();
add_action( 'wp_ajax_ampforwp_amp_layouts_import', 'ampforwp_amp_layouts_import' );

function ampforwp_amp_layouts_import(){
    //global redux_builder_amp;
   $importReduxSettings = $_POST['importSettings'];
    $importData = $importReduxSettings;
    $redux_builder_amp  = get_option("redux_builder_amp", true);
    $test = count($importData);
    if(count($importData)>0){
        foreach ($importData as $key => $value) {
            if($redux_builder_amp['google_font_api_key']=="" && in_array($key, array('amp_font_selector','amp_font_type'))){
                $value = "";
            }

            if(isset($redux_builder_amp[$key])){
               Redux::setOption( "redux_builder_amp", $key, $value);
            }
        }
   }
    //update_option("redux_builder_amp", $redux_builder_amp);
    //$redux_builder_amp  = get_option("redux_builder_amp", true);
    echo json_encode(
                array("status"=>200, 
                    "message"=> " Updated Successfully.", 
                    "importData"=>$importData,
                    "posted"=>$redux_builder_amp,
                   
                )
            );
    die();
}


add_action( 'admin_enqueue_scripts', 'amp_layout_load_admin_styles' );
function amp_layout_load_admin_styles(){
    wp_enqueue_script( 'ampforwp_admin_css_layout', AMPFORWP_LAYOUT_DIR_URI . 'assets/amp-layouts-admin.js', array("jquery"), '1.0.0' );
    wp_register_style( 'ampforwp_admin_css_layout', AMPFORWP_LAYOUT_DIR_URI . '/amp-layouts-admin.css', false, '1.0.0' );
    wp_enqueue_style( 'ampforwp_admin_css_layout' );
}
function ampforwp_array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }
    array_multisort($sort_col, $dir, $arr);
}
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/admin-config-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/swift-header-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/swift-footer-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/swift-single-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/swift-css-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/pagebuilder-testimonial-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/pagebuilder-pricing-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/pagebuilder-category-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/pagebuilder-feature-mod-extended.php";
require_once AMPFORWP_PAGE_BUILDER_LAYOUT."extended/pagebuilder-blurb-mod-extended.php";



add_action("plugins_loaded", "ampforwp_add_new_modules",9);
function ampforwp_add_new_modules(){
    add_filter("ampforwp_pagebuilder_modules_filter", "ampforwp_presentation_module");
}
function ampforwp_presentation_module($modules){
   
   $modules['contents_presentation'] = include AMPFORWP_PAGE_BUILDER_MODULE_PATH."/contents_presentation-module.php";
   $modules['team'] = include AMPFORWP_PAGE_BUILDER_MODULE_PATH."/team-module.php";
    return $modules;
}

require_once dirname( __FILE__ ) . '/updater/EDD_SL_Plugin_Updater.php';

// Check for updates
function amp_layouts_plugin_updater() {

    // retrieve our license key from the DB
    //$license_key = trim( get_option( 'amp_ads_license_key' ) );
    $selectedOption = get_option('redux_builder_amp',true);
    $license_key = '';//trim( get_option( 'amp_ads_license_key' ) );
    $pluginItemName = '';
    $pluginItemStoreUrl = '';
    $pluginstatus = '';
    if( isset($selectedOption['amp-license']) && "" != $selectedOption['amp-license'] && isset($selectedOption['amp-license'][AMP_LAYOUT_ITEM_FOLDER_NAME])){

       $pluginsDetail = $selectedOption['amp-license'][AMP_LAYOUT_ITEM_FOLDER_NAME];
       $license_key = $pluginsDetail['license'];
       $pluginItemName = $pluginsDetail['item_name'];
       $pluginItemStoreUrl = $pluginsDetail['store_url'];
       $pluginstatus = $pluginsDetail['status'];
    }
    
    // setup the updater
    $edd_updater = new AMP_LAYOUTS_EDD_SL_Plugin_Updater( AMP_LAYOUTS_STORE_URL, __FILE__, array(
            'version'   => AMP_LAYOUTS_VERSION,                // current version number
            'license'   => $license_key,                        // license key (used get_option above to retrieve from DB)
            'license_status'=>$pluginstatus,
            'item_name' => AMP_LAYOUTS_ITEM_NAME,          // name of this plugin
            'author'    => 'Mohammed Kaludi',                   // author of this plugin
            'beta'      => false,
        )
    );
}
add_action( 'admin_init', 'amp_layouts_plugin_updater', 0 );

// Notice to enter license key once activate the plugin

$path = plugin_basename( __FILE__ );
    add_action("after_plugin_row_{$path}", function( $plugin_file, $plugin_data, $status ) {
        global $redux_builder_amp;
        if(! defined('AMP_LAYOUT_ITEM_FOLDER_NAME')){
        $folderName = basename(__DIR__);
            define( 'AMP_LAYOUT_ITEM_FOLDER_NAME', $folderName );
        }
        $pluginsDetail = @$redux_builder_amp['amp-license'][AMP_LAYOUT_ITEM_FOLDER_NAME];
        $pluginstatus = $pluginsDetail['status'];

        if(empty($redux_builder_amp['amp-license'][AMP_LAYOUT_ITEM_FOLDER_NAME]['license'])){
            echo "<tr class='active'><td>&nbsp;</td><td colspan='2'><a href='".esc_url(  self_admin_url( 'admin.php?page=amp_options&tabid=opt-go-premium' )  )."'>Please enter the license key</a> to get the <strong>latest features</strong> and <strong>stable updates</strong></td></tr>";
               }elseif($pluginstatus=="valid"){
                $update_cache = get_site_transient( 'update_plugins' );
            $update_cache = is_object( $update_cache ) ? $update_cache : new stdClass();
            if(isset($update_cache->response[ AMP_LAYOUT_ITEM_FOLDER_NAME ]) 
                && empty($update_cache->response[ AMP_LAYOUT_ITEM_FOLDER_NAME ]->download_link) 
             ){
               unset($update_cache->response[ AMP_LAYOUT_ITEM_FOLDER_NAME ]);
            }
            set_site_transient( 'update_plugins', $update_cache );
            
        }
    }, 10, 3 );

