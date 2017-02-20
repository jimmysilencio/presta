<?php /*%%SmartyHeaderCode:12961607258ab1243e7e8b9-08692517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29b474cc4af159701d4f33e06a4cfecbab86c313' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blocksupplier/blocksupplier.tpl',
      1 => 1487568494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12961607258ab1243e7e8b9-08692517',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab1243eea444_34583852',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab1243eea444_34583852')) {function content_58ab1243eea444_34583852($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost/presta/prestashop/fournisseur" title="Fournisseurs">
					Fournisseurs
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost/presta/prestashop/1__fashion-supplier" 
					title="En savoir plus sur Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/presta/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tous les fournisseurs</option>
													<option value="http://localhost/presta/prestashop/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
