<?php /*%%SmartyHeaderCode:83346271158ab0330b067b9-51905907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b353f39d0f1df780559e582a01c5d1e8f29ef7d' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83346271158ab0330b067b9-51905907',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab0330b73bd1_42792861',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab0330b73bd1_42792861')) {function content_58ab0330b73bd1_42792861($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<h4 class="title_block"><a href="http://localhost/presta/prestashop/mon-compte" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/presta/prestashop/historique-commandes" title="Mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/presta/prestashop/avoirs" title="Mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/presta/prestashop/adresses" title="Mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/presta/prestashop/identite" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/presta/prestashop/?mylogout" title="Déconnexion" rel="nofollow">Déconnexion</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
