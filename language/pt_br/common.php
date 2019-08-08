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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DONATE'									=> 'Doar',
	'DONATE_EXPLAIN'							=> 'Ajude-nos fazendo uma doação.',
	'DONORLIST'									=> 'Doadores',
	'DONORLIST_EXPLAIN'							=> 'Veja a lista de doadores.',
	'MINIMUM_DONATION_MESSAGE'					=> 'O valor mínimo de doação é %s %s',
	'SELECT_METHOD'								=> 'Selecione o método de doação',
	'DONATION_TO'								=> 'Doação para',
	'AMOUNT'									=> 'Valor',
	'PAYPAL_TITLE'								=> 'Doação PayPal',
	'PAYPAL_DISABLED'							=> 'As doações de PayPal estão atualmente desativadas. Por favor, volte mais tarde.',
	'PAYZA_TITLE'								=> 'Doação Payza',
	'PAYZA_DISABLED'							=> 'As doações de Payza estão atualmente desativadas. Por favor, volte mais tarde.',
	'MONEYBOOKERS_TITLE'						=> 'Doação Moneybookers',
	'MONEYBOOKERS_DISABLED'						=> 'As doações de Moneybookers estão atualmente desativadas. Por favor, volte mais tarde.',
	'WEBMONEY_TITLE'							=> 'Doação WebMoney',
	'WEBMONEY_DISABLED'							=> 'As doações de WebMoney estão atualmente desativadas. Por favor, volte mais tarde.',
	'GOAL_TITLE'								=> 'Meta de doação',
	'GOAL_RECEIVED'								=> 'Doações recebidas',
	'GOAL'										=> 'Meta de doação',
	'GOAL_UNTIL'								=> 'Doações até o objetivo ser atingido',
	'LAST_FIVE_DONATIONS'						=> 'Últimas 5 doações',
	'DONORS_LIST'								=> 'Doadores',
	'DONORS_TOP_FIVE'							=> 'Top 5 doadores',
	'DONATED'									=> 'doado',
	'VIA'										=> 'via',
	'ON'										=> 'Em',
	'DONATION'									=> 'Doação',
	'DONATION_TITLE'							=> 'Donation Extension',
	'DONATION_LICENSE' 							=> 'Licença inválida',
	'DONATION_VERSION'							=> 'Versão',
	'DONATION_LAST'								=> 'Última doação',
	'DONATION_PRIVATE'							=> '<em>Privado</em>',
	'DONATION_ADD_CHAT'							=> '[i][b]%1$s[/b] doado %2$s%3$s,- [b]%4$s[/b][/i] %5$s',
	'DONATIONS'									=> 'Doações',
	'DONOR_USERNAME'							=> 'Nome de usuário',
	'DONOR_AMOUNT'								=> 'Valor',
	'DONOR_BY'									=> 'por',
	'DONOR_METHOD'								=> 'Método',
	'DONOR_DATE'								=> 'Data',
	'DONOR_DATE_MM_DD_YY'						=> 'MM/DD/AA',
	'DONOR_DATE_HH_MM'							=> 'HH/MM',
	'DONOR_LAST_DATE'							=> 'Data da última doação',
	'DONOR_TOTAL_INFO'							=> '%1$sx doado	em um total de %2$s%3$s',
	'DONOR_TIMES_DONATED'						=> 'Vezes doados',
	'DONOR_AMOUNT_TOTAL'						=> 'Valor total',
	'NO_DONORS'									=> 'Ainda não há doadores.',
	'NO_DONATIONS'								=> 'Ainda não há doações.',
	'LIST_DONOR'								=> '1 Doador',
	'LIST_DONORS'								=> '%s Doadores',
	'SUCCESS_TITLE'								=> 'Doação Bem sucedida',
	'CANCEL_TITLE'								=> 'Doação Cancelada',
	'DONATION_DISABLED'							=> 'As doações estão atualmente desativadas. Por favor, volte mais tarde.',
	'DONORS_LIST_DISABLED'						=> 'Sem permissão para ver a lista de doadores.',
	'NO_NON_MEMBERS_DONATIONS'					=> 'Você tem que ser um usuário registrado para doar',
	'NO_NON_MEMBERS_DONORS'						=> 'Você tem que ser um usuário registrado para ver a lista de doadores',
	'NOT_INSTALLED'								=> 'A extensão de doação não está instalada.',
	'ADMIN_NOTIFICATION_PM_SUBJECT' 			=> 'Você tem uma doação',
	'DONATION_NOTIFICATION'		 				=> 'Notificação de Doação',
	'DONATION_THANKS'							=> 'Graças aos nossos doadores',
	'VIEWING_DONATE'							=> 'Visualizando a página de Doação',
	'VIEWING_DONOR'								=> 'Visualizando a página de Doadores',
	'CONTINUE_ON_PAYPAL'						=> 'Continue no PayPal',
	'CONTINUE_ON_PAYZA'							=> 'Continue no Payza',
	'CONTINUE_ON_MONEYBOOKERS'					=> 'Continue no Moneybookers',
	'CONTINUE_ON_WEBMONEY'						=> 'Continue no Webmoney',
	'CONNECTING_ON_PAYPAL'						=> 'Conectando-se com PayPal',
	'DONATION_STEP_1'							=> '1',
	'DONATION_STEP_2'							=> '2',
	'DONATION_STEP_1_INNER'						=> 'Selecione um valor de depósito',
	'DONATION_STEP_2_INNER_PAYPAL'				=> 'Continue com segurança no PayPal',
	'DONATION_STEP_2_INNER_PAYZA'				=> 'Continue com segurança no Payza',
	'DONATION_STEP_2_INNER_MONEYBOOKERS'		=> 'Continue com segurança no Moneybookers',
	'DONATION_STEP_2_INNER_WEBMONEY'			=> 'Continue com segurança no Webmoney',
	'DONATION_EXPIRY_DAYS'		=> array(
		0 => 'Doação expira hoje',
		1 => 'Doação expira em <strong>%1$d</strong> dia',
		2 => 'Doação expira em <strong>%1$d</strong> dias',
	),
	'DONATION_EXPIRY_DAYS_DONORLIST'		=> array(
		0 => 'Doação nunca expira', 
		1 => 'Doação expira em <strong>%1$d</strong> dia',
		2 => 'Doação expira em <strong>%1$d</strong> dias',
	),
	//UCP
	'UCP_DONATION_TITLE'						=> 'Doações',
	'UCP_DONATION_EXPLAIN'						=> 'Suas doações para este site',
	'UCP_DONATION_SEE'							=> 'Ver suas doações',
	'UCP_DONATION_SEE_EXPLAIN'					=> 'Outros membros podem ver suas doações.<br />Definir como não, irá esconder a quantidade e o valor total.',
));
