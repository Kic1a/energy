<?php
/* Smarty version 4.3.4, created on 2024-09-16 20:37:40
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\deviceView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e87af4937303_49092108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2df3f5372df2ac3b03fca752c4f3971c84b4fa2' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\deviceView.tpl',
      1 => 1726511858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e87af4937303_49092108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185422611166e87af4926013_49502001', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_185422611166e87af4926013_49502001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185422611166e87af4926013_49502001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\ProgramsScience\\xamp\\htdocs\\energy\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="logout_button">Wyloguj</a>
    
    <h2>Lista urządzeń</h2>

    <?php if ((isset($_smarty_tpl->tpl_vars['devices']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['devices']->value) > 0) {?>
        <table>
            <thead>
                <tr>
                    <th>device_name</th>
                    <th>rated_power [kW]</th>
                    <th>location</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'device');
$_smarty_tpl->tpl_vars['device']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['device_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['rated_power'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['location'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['first_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['last_name'];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceEdit/<?php echo $_smarty_tpl->tpl_vars['device']->value['id_device'];?>
" class="edit_button">Edytuj</a>
                        
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceDelete/<?php echo $_smarty_tpl->tpl_vars['device']->value['id_device'];?>
" class="delete_button" onclick="return confirm('Czy na pewno chcesz usunąć to urządzenie?')">Usuń</a>
                        <?php }?>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Brak urządzeń do wyświetlenia.</p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceAdd" class="add_button">Dodaj nowe urządzenie</a>
    <?php }?>

    <h2>Zużycie energii</h2>

    <?php if ((isset($_smarty_tpl->tpl_vars['devices']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['devices']->value) > 0) {?>
        <table>
            <thead>
                <tr>
                    <th>device_name</th>
                    <th>energy_produced [kWh]</th>
                    <th>energy_consumed [kWh]</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'device');
$_smarty_tpl->tpl_vars['device']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['device']->value['device_name'];?>
</td>
                    <td><?php if ((isset($_smarty_tpl->tpl_vars['device']->value['energy_produced']))) {
echo $_smarty_tpl->tpl_vars['device']->value['energy_produced'];
} else { ?>Brak danych<?php }?></td>
                    <td><?php if ((isset($_smarty_tpl->tpl_vars['device']->value['energy_consumed']))) {
echo $_smarty_tpl->tpl_vars['device']->value['energy_consumed'];
} else { ?>Brak danych<?php }?></td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
energyEdit/<?php echo $_smarty_tpl->tpl_vars['device']->value['device_name'];?>
" class="edit_button">Edytuj</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Brak urządzeń do wyświetlenia</p>
    <?php }?>

<?php
}
}
/* {/block 'content'} */
}
