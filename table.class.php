<?php
/**
 * An HTML Abstraction Class
 *
 * Allows a programmer to use an object oriented system to build their HTML
 * 
 * @author Jay Zawrotny <jayzawrotny@gmail.com>
 * @version 1.0
 * @package RoboStangs2011
 */
if( ! class_exists( 'HTML' ) )
{
	include THEME_LIB_DIR . 'html_builder/abstracthtml.class.php';
}
/**
 * HTML Abstraction Sub Class
 *
 * Creates the single HTML element and allowed attributes if neccesary.
 * @package RoboStangs2011
 * @subpackage HTMLClass
 */   
class HTML_table extends HTML_Tag
{
	protected function set_open_tag()
	{
		$this->open_tag = get_class( $this );
	}
	protected function set_close_tag()
	{
		$this->close_tag = get_class( $this );
	}

	public function __construct($content = '', $after_html = '', $before_html = '', $indent_level = '')
	{
		
		$this->set_attribute( 'border' );
		$this->set_attribute( 'cellpadding-charset' );
		$this->set_attribute( 'cellspacing' );
		$this->set_attribute( 'frame' );
		$this->set_attribute( 'rules' );
		$this->set_attribute( 'summary' );
		$this->set_attribute( 'width' );

	}
}
?>
