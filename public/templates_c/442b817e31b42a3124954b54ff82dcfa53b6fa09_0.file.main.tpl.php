<?php
/* Smarty version 4.3.4, created on 2024-09-10 21:20:10
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e09bea50c6b6_27524966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442b817e31b42a3124954b54ff82dcfa53b6fa09' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\templates\\main.tpl',
      1 => 1725996010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e09bea50c6b6_27524966 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76819090066e09bea50acc5_59323270', 'content');
?>

	</div>
</body>
       
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104757274566e09bea50be27_62277815', 'bottom');
?>

</html>
<?php }
/* {block 'content'} */
class Block_76819090066e09bea50acc5_59323270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_76819090066e09bea50acc5_59323270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 ... <?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_104757274566e09bea50be27_62277815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_104757274566e09bea50be27_62277815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
