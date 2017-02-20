<?php /*%%SmartyHeaderCode:21865463958ab02f9b3ba06-60556570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7fbec04f3681e6ff9b2b5ef4d43c75ba9739e2e' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
    '792f1a8b265c6c4d2862c88489a1b55b86b4360e' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21865463958ab02f9b3ba06-60556570',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab032fbc3f68_55775076',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab032fbc3f68_55775076')) {function content_58ab032fbc3f68_55775076($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://localhost/presta/prestashop/recherche" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Rechercher" class="button" />
		</p>
	</form>
</div>
<script type="text/javascript">
// <![CDATA[
$('document').ready(function() {

	var $input = $("#search_query_top");

	$input.autocomplete(
	'http://localhost/presta/prestashop/recherche',
	{
		minChars: 3,
		max: 10,
		width: 500,
		selectFirst: false,
		scroll: false,
		dataType: "json",
		formatItem: function(data, i, max, value, term) {
			return value;
		},
		parse: function(data) {
			var mytab = [];
			for (var i = 0; i < data.length; i++)
				mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
			return mytab;
		},
		extraParams: {
			ajaxSearch: 1,
			id_lang: 1
		}
	})
	.result(function(event, data, formatted) {
		$input.val(data.pname);
		document.location.href = data.product_link;
	});
});
// ]]>
</script>


<!-- /Block search module TOP -->
<?php }} ?>
