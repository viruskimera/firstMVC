<?php /* Smarty version Smarty-3.1.8, created on 2012-06-22 19:54:38
         compiled from "views/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17352758704fe513ce77f121-83469439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cba98b427a413cf065f7d1feb7e6380b1cd005a' => 
    array (
      0 => 'views/template.tpl',
      1 => 1340412861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17352758704fe513ce77f121-83469439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe513ce79d868_19313051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe513ce79d868_19313051')) {function content_4fe513ce79d868_19313051($_smarty_tpl) {?>


<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
	
	<h2 style='color: red'><?php echo $_smarty_tpl->tpl_vars['f']->value;?>
</h2> </br>

<?php } ?>

hola<?php }} ?>