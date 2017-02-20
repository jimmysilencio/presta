<?php /* Smarty version Smarty-3.1.19, created on 2017-02-20 16:57:22
         compiled from "/home/anicet_j/Rendu/presta/prestashop/modules/bonjourlesfilles/views/templates/hook/bonjourlesfilles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61037775158ab11e2931ad4-44488095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b6f6b843cd8af662304ee191535a9ff66549ce2' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/modules/bonjourlesfilles/views/templates/hook/bonjourlesfilles.tpl',
      1 => 1487240624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61037775158ab11e2931ad4-44488095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ab11e293e6d0_36604809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ab11e293e6d0_36604809')) {function content_58ab11e293e6d0_36604809($_smarty_tpl) {?>

<div id="bonjour_les_filles_block" class="block">
    <p>
        <?php echo smartyTranslate(array('s'=>'Bonjour','mod'=>'bonjourlesfilles'),$_smarty_tpl);?>
 
        <span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

        </span>
    </p>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bonjourlesfilles','default'), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php echo smartyTranslate(array('s'=>'Call default controller in bonjourlesfilles','mod'=>'bonjourlesfilles'),$_smarty_tpl);?>

    </a>
</div><?php }} ?>
