<?php
/* Smarty version 4.3.4, created on 2024-08-19 22:44:25
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3aea96202f4_57922171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427da55f24069804946fbe74dfd0369555bb028a' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\loginView.tpl',
      1 => 1724100264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66c3aea96202f4_57922171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189893961366c3aea9615846_26415593', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_189893961366c3aea9615846_26415593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189893961366c3aea9615846_26415593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <body>
    <style>
    body {
    background: url(back.jpg) no-repeat;
    background-size: cover;
    background-position: center; 
    }
    
</style>

    <div class="login-container">
        <h2>LOGOWANIE</h2>
        <form action="<?php echo (($tmp = $_smarty_tpl->tpl_vars['yourActionURL']->value ?? null)===null||$tmp==='' ? '#' ?? null : $tmp);?>
" method="POST">
            <div class="input-group">
                <label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
            </div>
            <div class="input-group">
                <label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
            
    </div>
            
            </body>
                        
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
