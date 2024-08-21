<?php
/* Smarty version 4.3.4, created on 2024-08-21 20:41:29
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\deviceView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c634d9859894_97361853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2df3f5372df2ac3b03fca752c4f3971c84b4fa2' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\deviceView.tpl',
      1 => 1724265687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c634d9859894_97361853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47807879266c634d9856fd7_77832887', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_47807879266c634d9856fd7_77832887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47807879266c634d9856fd7_77832887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="logout_button">Wyloguj</a>  
   
<?php
}
}
/* {/block 'content'} */
}
