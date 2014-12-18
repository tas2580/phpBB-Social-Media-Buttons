<?php
/**
*
* @package phpBB Extension - tas2580 Social Media Buttons
* @copyright (c) 2014 tas2580
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\socialbuttons\migrations;

class release_0_3_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['socialbuttons_version']) && version_compare($this->config['socialbuttons_version'], '0.3.0', '>=');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('socialbuttons_style', '1')),


			// Keep track of version in the database
			array('config.add', array('socialbuttons_version', '0.3.0')),
		);
	}
}
