<?php
/**
*
* @package phpBB Extension - Donation extension
* @copyright (c) 2016-2018 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.2.8] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
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
	'ACP_DONATION'						=> 'Extensão de Doação',
	'ACP_DONATION_CONFIG'				=> 'Configuração',
	'ACP_DONATION_GOAL'					=> 'Meta de doação',
	'ACP_DONATION_DONORS'				=> 'Lista de doadores',
	'ACP_DONATION_HISTORY'				=> 'Histórico de doação',
	'ACP_DONATION_IPN'					=> 'Configurações IPN',
	// Log entries
	'LOG_DONATION_CONFIG_UPDATE'	 			=> '<strong>Configuração de doação atualizada</strong>',
	'LOG_DONATION_RESET_DATE'	 				=> '<strong>Doação redefinir data de instalação</strong>',
	'LOG_DONATION_UPDATED'	 					=> '<strong>Doador atualizado</strong><br />» %1$s',
	'LOG_DONATION_ADDED'	 					=> '<strong>Doador adicionado</strong><br />» %1$s',
	'LOG_DONATION_DELETED'	 					=> '<strong>Doador excluído</strong><br />» %1$s',
	'LOG_DONATION_GOAL_UPDATE'	 				=> '<strong>Meta de doação atualizada</strong>',
	'LOG_DONATION_IPN_UPDATE'	 				=> '<strong>Configurações de IPN de doação atualizadas</strong>',
	'LOG_DONATION_HISTORY_DELETED'	 			=> '<strong>Histórico de doação excluído</strong>',
	'LOG_DONATION_EMAIL'						=> '<strong>E-mail enviado para o usuário expirado</strong><br />» %s',
));
