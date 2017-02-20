<?php /* Smarty version Smarty-3.1.19, created on 2017-02-20 16:47:10
         compiled from "/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24090830258ab0f7e6e57a7-64122920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e076afda9a998f92f4041b9e8568878155952d5a' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/themes/samsung_campus/modules/blockcontact/nav.tpl',
      1 => 1487568468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24090830258ab0f7e6e57a7-64122920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab0f7e6f19d6_92218770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab0f7e6f19d6_92218770')) {function content_58ab0f7e6f19d6_92218770($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
