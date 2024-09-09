{extends file="main.tpl"}

{block name=content}

    <a href="{$conf->action_root}logout" class="logout_button">Wyloguj</a>
    
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
            {foreach from=$devices item=device}
            <tr>
                <td>{$device.name}</td>
                <td>{$device.user}</td>
                <td>{$device.power}</td>
                <td>{$device.location}</td>
                <td>
                    <a href="{$conf->action_root}deviceEdit/{$device.id}" class="edit_button">Edytuj</a>
                    <a href="{$conf->action_root}deviceDelete/{$device.id}" class="delete_button">Usuń</a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
        
    <a href="{$conf->action_root}deviceAdd" class="add_button">Dodaj nowe urządzenie</a>

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
            {foreach from=$devices item=device}
            <tr>
                <td>{$device.name}</td>
                <td>{if isset($device.energy_use)}{$device.energy_use}{else}Brak danych{/if}</td>
                <td>{if isset($device.energy_production)}{$device.energy_production}{else}Brak danych{/if}</td>
                <td>{if isset($device.comment)}{$device.comment}{else}Brak uwag{/if}</td>
                <td>
                    <a href="{$conf->action_root}deviceEdit/{$device.id}" class="edit_button">Edytuj</a>
                    <a href="{$conf->action_root}deviceDelete/{$device.id}" class="delete_button">Usuń</a>
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>    
        
    <a href="{$conf->action_root}deviceAdd" class="add_button">Zaktualizuj zużycie</a>

{/block}
