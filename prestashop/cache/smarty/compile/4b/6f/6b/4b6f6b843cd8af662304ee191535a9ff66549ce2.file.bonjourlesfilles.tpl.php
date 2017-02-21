<?php /* Smarty version Smarty-3.1.19, created on 2017-02-21 10:40:10
         compiled from "/home/anicet_j/Rendu/presta/prestashop/modules/bonjourlesfilles/views/templates/hook/bonjourlesfilles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128217742058ac0afad7f9e0-30522046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '128217742058ac0afad7f9e0-30522046',
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
  'unifunc' => 'content_58ac0afadac129_49573771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac0afadac129_49573771')) {function content_58ac0afadac129_49573771($_smarty_tpl) {?>

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
