<!DOCTYPE html>
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
        <form action="{$yourActionURL|default:'#'}" method="POST">
            <div class="input-group">
                <label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
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
