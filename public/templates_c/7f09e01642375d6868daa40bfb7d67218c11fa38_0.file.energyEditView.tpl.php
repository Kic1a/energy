<?php
/* Smarty version 4.3.4, created on 2024-09-15 16:09:13
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\energyEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e6ea897302f7_75335091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f09e01642375d6868daa40bfb7d67218c11fa38' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\energyEditView.tpl',
      1 => 1726409350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e6ea897302f7_75335091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210890231166e6ea8972d485_27276976', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_210890231166e6ea8972d485_27276976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210890231166e6ea8972d485_27276976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Edycja zużycia energii</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
energySave" method="post">
    <input type="hidden" name="device_name" value="<?php echo $_smarty_tpl->tpl_vars['energy']->value['device_name'];?>
" />
    
    <label for="energy_produced">Wyprodukowana energia (kWh):</label>
    <input type="text" id="energy_produced" name="energy_produced" value="<?php echo $_smarty_tpl->tpl_vars['energy']->value['energy_produced'];?>
" required/>
    
    <label for="energy_consumed">Zużyta energia (kWh):</label>
    <input type="text" id="energy_consumed" name="energy_consumed" value="<?php echo $_smarty_tpl->tpl_vars['energy']->value['energy_consumed'];?>
" required/>
    
    <button type="submit">Zapisz</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
