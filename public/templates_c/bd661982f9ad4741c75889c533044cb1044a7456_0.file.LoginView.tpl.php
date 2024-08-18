<?php
/* Smarty version 4.3.4, created on 2024-08-18 14:50:01
  from 'D:\Programs Science\xamp\htdocs\energy\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c1edf993a8f2_89096666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd661982f9ad4741c75889c533044cb1044a7456' => 
    array (
      0 => 'D:\\Programs Science\\xamp\\htdocs\\energy\\app\\views\\LoginView.tpl',
      1 => 1723984349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c1edf993a8f2_89096666 (Smarty_Internal_Template $_smarty_tpl) {
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
                <label for="username">Nazwa użytkownika</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Hasło</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
    </div>
</body>
</html>
<?php }
}
