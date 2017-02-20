<?php /* Smarty version Smarty-3.1.19, created on 2017-02-20 15:55:34
         compiled from "/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159040523758ab0366426c34-45421177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e99a587e53abbc99bf7cdaa17781ecd134f59aa' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/homefeatured/homefeatured.tpl',
      1 => 1487568514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159040523758ab0366426c34-45421177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab0366430bf4_89623082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab0366430bf4_89623082')) {function content_58ab0366430bf4_89623082($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
