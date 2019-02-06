<?php
/**
*
* @package phpBB Extension - Hide user
* @copyright (c) 2019 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace sheer\hdeusr\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
/**
* Assign functions defined in this class to event listeners in the core
*
* @return array
* @static
* @access public
*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.memberlist_modify_sql_query_data'		=> 'memberlist_modify',
		);
	}

	/** @var \phpbb\db\driver\driver_interface $db */
	protected $db;

	/** @var \phpbb\config\config $config */
	protected $config;

	/** @var \phpbb\auth\auth */
	protected $auth;

	/**
	* Constructor
	*/
	public function __construct(
		\phpbb\db\driver\driver_interface $db,
		\phpbb\config\config $config,
		\phpbb\auth\auth $auth
	)
	{
		$this->db		= $db;
		$this->config	= $config;
		$this->auth		= $auth;
	}

	public function memberlist_modify($event)
	{
		if (!$this->auth->acl_get('a_'))
		{
			$sql_where = $event['sql_where'];
			$sql_where .= ' AND ' . $this->db->sql_in_set('u.user_id', array($this->config['hdeusr_list']), true) . '';
			$event['sql_where'] = $sql_where;
		}
	}
}
