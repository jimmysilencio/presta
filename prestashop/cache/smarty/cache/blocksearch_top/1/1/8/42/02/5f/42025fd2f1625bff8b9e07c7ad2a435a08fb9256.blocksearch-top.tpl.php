<?php /*%%SmartyHeaderCode:44534672258ab036559b2a9-11583718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42025fd2f1625bff8b9e07c7ad2a435a08fb9256' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blocksearch/blocksearch-top.tpl',
      1 => 1487568488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44534672258ab036559b2a9-11583718',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab1074099b98_62790246',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab1074099b98_62790246')) {function content_58ab1074099b98_62790246($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/presta/prestashop/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
