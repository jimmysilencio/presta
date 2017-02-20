<?php /*%%SmartyHeaderCode:12231634358ab1243a0acc1-50888762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05bddaa0f5425db235ccd00007b2d10804c360ae' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1487568476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12231634358ab1243a0acc1-50888762',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab1243a4f329_76570681',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab1243a4f329_76570681')) {function content_58ab1243a4f329_76570681($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/presta/prestashop/fabricants" title="Fabricants">
						Fabricants
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost/presta/prestashop/1_fashion-manufacturer" title="En savoir plus sur Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/presta/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Tous les fabricants</option>
													<option value="http://localhost/presta/prestashop/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
