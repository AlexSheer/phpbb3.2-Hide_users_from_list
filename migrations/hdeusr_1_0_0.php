<?php
/**
*
* @package phpBB Extension - Hide user
* @copyright (c) 2019 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace sheer\hdeusr\migrations;

class hdeusr_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
		);
	}

	public function revert_schema()
	{
		return array(
		);
	}

	public function update_data()
	{
		return array(
			// Current version
			array('config.add', array('hdeusr_version', '1.0.0')),
			array('config.add', array('hdeusr_list', '')),
			// ACP
			array('module.add', array('acp', 'ACP_CAT_USERS', array(
				'module_basename'	=> '\sheer\hdeusr\acp\config_module',
				'module_langname'	=> 'ACP_HDUSR_CONFIG',
				'module_mode'		=> 'config',
				'module_auth'		=> 'ext_sheer/hdeusr && acl_a_user',
				'module_enabled'	=> true,
			))),
		);
	}
}
