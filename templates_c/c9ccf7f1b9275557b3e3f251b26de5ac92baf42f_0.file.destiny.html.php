<?php
/* Smarty version 3.1.30, created on 2016-12-12 17:16:08
  from "/Applications/AMPPS/www/destiny/destiny.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f21a839c6f0_92629296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ccf7f1b9275557b3e3f251b26de5ac92baf42f' => 
    array (
      0 => '/Applications/AMPPS/www/destiny/destiny.html',
      1 => 1481580966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584f21a839c6f0_92629296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
	<link rel="stylesheet" type="text/css" href="destiny.css">
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characters']->value, 'guardians');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['guardians']->value) {
?>
	<div class="guardian-select-dashboard" style="background: url('https://www.bungie.net<?php echo $_smarty_tpl->tpl_vars['guardians']->value['backgroundPath'];?>
') no-repeat;">
		<img src="https://www.bungie.net<?php echo $_smarty_tpl->tpl_vars['guardians']->value['emblemPath'];?>
" class="guardian-emblem" />
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</body><?php }
}
