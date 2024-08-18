<?php
/* Smarty version 4.3.4, created on 2024-08-18 15:04:28
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c1f15c27d1e3_59202231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427da55f24069804946fbe74dfd0369555bb028a' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\loginView.tpl',
      1 => 1723986267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c1f15c27d1e3_59202231 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Logowanie</h2>
        <form action="<?php echo (($tmp = $_smarty_tpl->tpl_vars['yourActionURL']->value ?? null)===null||$tmp==='' ? '#' ?? null : $tmp);?>
" method="POST">
            <div class="input-group">
                <label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
            </div>
            <div class="input-group">
                <label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
    </div>
</body>
</html>
<?php }
}
