<?php
/**
*
* info_acp_connectionlog [Russian]
*
* @package phpBB Extension - Connection Log
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_HDUSR_CONFIG'				=> 'List of not displayed users',
	'ACP_HDUSR'						=> 'Here you can specify users whose names will not appear in the list of users at the conference. However, administrators will see the full actual list.',
	'ACP_HDUSR_CONFIG_EXPLAIN'		=> 'Enter here the user IDs separated by commas, which should not be displayed in the list.',
	'UPDATE_HDEUSR_LIST_SUCCESS'	=> 'The list of non-displayed users has been updated successfully.',
));
