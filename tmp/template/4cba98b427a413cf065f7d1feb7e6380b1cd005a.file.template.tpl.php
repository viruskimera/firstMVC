<?php /* Smarty version Smarty-3.1.8, created on 2012-06-24 18:26:35
         compiled from "views/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8774265234fe505c32cfd97-68709003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cba98b427a413cf065f7d1feb7e6380b1cd005a' => 
    array (
      0 => 'views/template.tpl',
      1 => 1340580392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8774265234fe505c32cfd97-68709003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe505c3305f44_96002811',
  'variables' => 
  array (
    'data' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe505c3305f44_96002811')) {function content_4fe505c3305f44_96002811($_smarty_tpl) {?><html>
<head>
	<title>Adwords simulation</title>
	<link rel="stylesheet" type="text/css" href="libs/css/cssMain.css">
</head>
<body>

	<div class="main">
		<div class="menus">
			<ul class="ulmenu">
				<li><img data-info="/controllers/controller/left" src="libs/imgs/left.png"></li>
				<li><img data-info="views/right.tpl" src="libs/imgs/right.png"></li>
				<li><img src="libs/imgs/statistic.png"></li>
				<li><img src="libs/imgs/user-boss.png"></li>
				<li><img src="libs/imgs/notepad.png"></li>
			</ul>
		</div>
		</br>

		<div id="content">

			<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
	
				<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
 </br>

			<?php } ?>

			<h1>hola, como estas?</h1>

		</div>
		</br>

		<div class="footer"> rights reserved.</div>
	</div>


<script type="text/javascript" src="libs/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="libs/js/jsMain.js"></script>
</body>
</html>


<?php }} ?>