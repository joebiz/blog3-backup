<?php
/**
 * Redux Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Redux Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Redux Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     ReduxFramework
 * @author      Dovy Paukstys
 * @version     3.1.5
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;
// Don't duplicate me!
if( !class_exists( 'ReduxFramework_amp_layouts' ) ) {
    /**
     * Main ReduxFramework_custom_field class
     *
     * @since       1.0.0
     */
    class ReduxFramework_amp_layouts {
    
        /**
         * Field Constructor.
         *
         * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        function __construct( $field = array(), $value ='', $parent ) {
        
            $this->parent = $parent;
            $this->field = $field;
            $this->value = $value;
            if ( empty( $this->extension_dir ) ) {
                $this->extension_dir = trailingslashit( str_replace( '\\', '/', dirname( __FILE__ ) ) );
                $this->extension_url = site_url( str_replace( trailingslashit( str_replace( '\\', '/', ABSPATH ) ), '', $this->extension_dir ) );
            } 
            // Set default args for this field to avoid bad indexes. Change this to anything you use.
            $defaults = array(
                'options'           => array(),
                'stylesheet'        => '',
                'output'            => true,
                'enqueue'           => true,
                'enqueue_frontend'  => true
            );
            $this->field = wp_parse_args( $this->field, $defaults );            
        
        }
        /**
         * Field Render Function.
         *
         * Takes the vars and outputs the HTML for the field in the settings
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function render() {
            // HTML output goes here
        	$fieldID   = $this->field['id'];
            $fieldName = $this->field['name'] . $this->field['name_suffix'];
            $fieldValue = $this->field['default'];
            $fieldClass = $this->field['class'];
            if( ! empty( $this->field['layouts'] ) ){
                $secret = md5( md5( AUTH_KEY . SECURE_AUTH_KEY ) . '-redux_builder_amp' );
                $link = esc_url( admin_url( 'admin-ajax.php?action=ampforwp_theme_redux_download_theme-redux_builder_amp&secret=' . $secret ) );

            	$field_html = "<div class='$fieldClass'>
                    <div class='amp_layout'>
                    <input type='hidden' name='$fieldName' id='' value='$fieldValue'>
                    ";
            	foreach ($this->field['layouts'] as $k => $valueLayouts) {
	            		$field_html .= '

	            				<div class="amppb-layout-layout">
	            					<div class="amppb-layout-wrapper">
	            						<h4 class="amppb-layout-title">'.$valueLayouts['name'].'</h4> 
	            						<div class="amppb-layout-screenshot">
	            							<img src="'.$valueLayouts['preview_image'].'" onclick="window.open(\''.$valueLayouts['preview'].'\')">
	            						</div>
	            						<div class="amppb-layout-bottom">
	            							<div class="amppb-layout-button">
	            								<a target="_blank" href="'.$valueLayouts['preview'].'" class="button">Preview</a> 
                                                <button type="button" class="ampforwp-text-layout-import" data-layout-val="'.$valueLayouts['value'].'" data-layout=\''.$valueLayouts['import'].'\' class="button">Import</button> 
                                                '.(isset($valueLayouts['other_link'])? '<a target="_blank" href="'.$valueLayouts['other_link']['link'].'" class="amp_layouts_tuts">'.$valueLayouts['other_link']['label'].'</a>' : '').'
	            							</div>
	            						</div>
	            					</div>
	            				</div>
	            			';
                        
                    
                }
                $field_html .= "</div>";
            }
            
           	echo "<div class='amp-layout-class'>
           		$field_html
           	</div>";
            ?>
            <a href="<?php echo $link; ?>" id="redux-export-code-dl" class="button-primary"><?php esc_html_e( 'Export current settings', 'redux-framework' ); ?></a>
            <?php
        }
    
        /**
         * Enqueue Function.
         *
         * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function enqueue() {
            wp_enqueue_script(
                'redux-field-icon-select-js', 
                $this->extension_url . 'field_amp_layouts.js', 
                array( 'jquery' ),
                time(),
                true
            );
            wp_enqueue_style(
                'redux-field-icon-select-css', 
                $this->extension_url . 'field_amp_layouts.css',
                time(),
                true
            );
        
        }
        
        /**
         * Output Function.
         *
         * Used to enqueue to the front-end
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */        
        public function output() {
            if ( $this->field['enqueue_frontend'] ) {
            }
            
        }        
        

    }
}