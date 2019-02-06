<?php
/**
*
* @package phpBB Extension - Connection Log
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace sheer\hdeusr\acp;

class config_info
{
	function module()
	{
		return array(
			'filename'	=> '\sheer\hdeusr\acp\config_module',
			'version'	=> '1.0.0',
			'title' => 'ACP_HDUSR_CONFIG',
			'modes'		=> array(
				'config'	=> array(
					'title' => 'ACP_HDUSR_CONFIG',
					'auth' => 'ext_sheer/hdeusr && acl_a_user',
					'cat' => array('ACP_CAT_USERS')
				),
			),
		);
	}
}
