<?php
/* Smarty version 4.3.4, created on 2024-09-09 22:55:57
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\deviceView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66df60dd99a525_45227163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2df3f5372df2ac3b03fca752c4f3971c84b4fa2' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\deviceView.tpl',
      1 => 1725915356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66df60dd99a525_45227163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61923682766df60dd98e874_75818895', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_61923682766df60dd98e874_75818895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_61923682766df60dd98e874_75818895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="logout_button">Wyloguj</a>
    
    <h2>Lista urządzeń</h2>

    <table>
        <thead>
            <tr>
                <th>Nazwa urządzenia</th>
                <th>Użytkownik</th>
                <th>Moc [kW]</th>
                <th>Lokalizacja</th>
                <th>Akcje</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['device']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['device']->value['user'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['device']->value['power'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['device']->value['location'];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceEdit/<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
" class="edit_button">Edytuj</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceDelete/<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
" class="delete_button">Usuń</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
        
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceAdd" class="add_button">Dodaj nowe urządzenie</a>

    <h2>Zużycie energii</h2>

    <table>
        <thead>
            <tr>
                <th>Nazwa urządzenia</th>
                <th>Energia skonsumowana [kWh]</th>
                <th>Energia wygenerowana [kWh]</th>
                <th>Uwagi (data)</th>
                <th>Akcje</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['device']->value['name'];?>
</td>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['device']->value['energy_use']))) {
echo $_smarty_tpl->tpl_vars['device']->value['energy_use'];
} else { ?>Brak danych<?php }?></td>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['device']->value['energy_production']))) {
echo $_smarty_tpl->tpl_vars['device']->value['energy_production'];
} else { ?>Brak danych<?php }?></td>
                <td><?php if ((isset($_smarty_tpl->tpl_vars['device']->value['comment']))) {
echo $_smarty_tpl->tpl_vars['device']->value['comment'];
} else { ?>Brak uwag<?php }?></td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceEdit/<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
" class="edit_button">Edytuj</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceDelete/<?php echo $_smarty_tpl->tpl_vars['device']->value['id'];?>
" class="delete_button">Usuń</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>    
        
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deviceAdd" class="add_button">Zaktualizuj zużycie</a>

<?php
}
}
/* {/block 'content'} */
}
