<?php /* Smarty version Smarty-3.1.19, created on 2017-02-20 15:55:34
         compiled from "/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blockbestsellers/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170148277058ab0366604dd4-63564325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9265aae06e3fa4ed9395a38ed14ad5582df0da3e' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blockbestsellers/blockbestsellers-home.tpl',
      1 => 1487568452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170148277058ab0366604dd4-63564325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab036660fed3_27303425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab036660fed3_27303425')) {function content_58ab036660fed3_27303425($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
