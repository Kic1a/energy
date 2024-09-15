<?php
/* Smarty version 4.3.4, created on 2024-09-15 15:29:05
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\deviceEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e6e121133d43_81569732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b1c11f1b99122356018ca7e92daf04ac99721e' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\deviceEditView.tpl',
      1 => 1726406941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e6e121133d43_81569732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197365659566e6e12112f908_45809882', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_197365659566e6e12112f908_45809882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197365659566e6e12112f908_45809882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Edytuj urządzenie</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceSave" method="post">
    <input type="hidden" name="id_device" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['id_device'];?>
" />
    <label for="device_name">Nazwa urządzenia:</label>
    <input type="text" name="device_name" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['device_name'];?>
" required /><br/>

    <label for="rated_power">Moc znamionowa [kW]:</label>
    <input type="number" name="rated_power" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['rated_power'];?>
" required /><br/>

    <label for="location">Lokalizacja:</label>
    <input type="text" name="location" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['location'];?>
" required /><br/>

    <label for="first_name">osoba nadzorująca (imię):</label>
    <input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['first_name'];?>
" required /><br/>

    <label for="last_name">osoba nadzorująca (nazwisko):</label>
    <input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['device']->value['last_name'];?>
" required /><br/>

    <input type="submit" value="Zapisz zmiany" />
</form>
<?php
}
}
/* {/block 'content'} */
}
