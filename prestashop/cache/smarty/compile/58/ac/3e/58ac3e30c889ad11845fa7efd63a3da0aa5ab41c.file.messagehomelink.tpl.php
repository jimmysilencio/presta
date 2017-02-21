<?php /* Smarty version Smarty-3.1.19, created on 2017-02-21 10:36:57
         compiled from "/home/anicet_j/Rendu/presta/prestashop/modules/messageoftheday/views/templates/hook/messagehomelink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94041399858ac0a39d3a739-40164558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ac3e30c889ad11845fa7efd63a3da0aa5ab41c' => 
    array (
      0 => '/home/anicet_j/Rendu/presta/prestashop/modules/messageoftheday/views/templates/hook/messagehomelink.tpl',
      1 => 1487262218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94041399858ac0a39d3a739-40164558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ac0a39d75308_06276410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac0a39d75308_06276410')) {function content_58ac0a39d75308_06276410($_smarty_tpl) {?>

<div class="block">
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <p>
            <?php echo smartyTranslate(array('s'=>'Last message of the day','mod'=>'messageoftheday'),$_smarty_tpl);?>
 
            <p>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

            </p>
            <p>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true);?>

            </p>
        </p>
    <?php }?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('messageoftheday','messagelist'), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php echo smartyTranslate(array('s'=>'Call module front','mod'=>'messageoftheday'),$_smarty_tpl);?>

    </a>
</div><?php }} ?>
