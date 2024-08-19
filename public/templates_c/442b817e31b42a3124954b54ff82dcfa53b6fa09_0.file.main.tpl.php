<?php
/* Smarty version 4.3.4, created on 2024-08-19 22:13:06
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3a752af2788_57677069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442b817e31b42a3124954b54ff82dcfa53b6fa09' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\templates\\main.tpl',
      1 => 1724098386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3a752af2788_57677069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "ENERGY" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>
<body>
    	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140300816166c3a752af1768_21553745', 'content');
?>

	</div>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_140300816166c3a752af1768_21553745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140300816166c3a752af1768_21553745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 ... <?php
}
}
/* {/block 'content'} */
}
