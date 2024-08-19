{extends file="main.tpl"}

{block name=content}

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
        <form action="{$yourActionURL|default:'#'}" method="POST">
            <div class="input-group">
                <label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
            </div>
            <div class="input-group">
                <label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
            
    </div>
            
            </body>
                        
{include file='messages.tpl'}

{/block}
