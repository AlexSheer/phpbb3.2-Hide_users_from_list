<?php
/**
*
* @package phpBB Extension - Connection Log
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace sheer\hdeusr\acp;

class config_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $template, $request, $user, $config;
		$this->tpl_name = 'acp_config_body';

		$exclude_users	= $request->variable('hdeusr_list',  $config['hdeusr_list']);

		$template->assign_vars(array(
			'HDEUSR_LIST'		=> $exclude_users,
			'U_ACTION'			=> $this->u_action,
			)
		);

 		add_form_key('sheer/hdeusr');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('sheer/hdeusr'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('hdeusr_list', $exclude_users);

			meta_refresh(3, append_sid($this->u_action));
			trigger_error($user->lang['UPDATE_HDEUSR_LIST_SUCCESS'] . adm_back_link($this->u_action));
		}
	}
}
