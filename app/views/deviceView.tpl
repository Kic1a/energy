{extends file="main.tpl"}

{block name=content}

    <a href="{$conf->action_root}logout" class="logout_button">Wyloguj</a>
    
    <h2>Lista urządzeń</h2>

    {if isset($devices) && $devices|@count > 0}
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
                {foreach from=$devices item=device}
                <tr>
                    <td>{$device.device_name}</td>
                    <td>{$device.rated_power}</td>
                    <td>{$device.location}</td>
                    <td>{$device.first_name}</td>
                    <td>{$device.last_name}</td>
                    <td>
                        <a href="{$conf->action_root}deviceEdit/{$device.id_device}" class="edit_button">Edytuj</a>
                        
                        {if $isAdmin}
                            <a href="{$conf->action_root}deviceDelete/{$device.id_device}" class="delete_button" onclick="return confirm('Czy na pewno chcesz usunąć to urządzenie?')">Usuń</a>
                        {/if}
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>Brak urządzeń do wyświetlenia.</p>
    {/if}

    {if $isAdmin}
        <a href="{$conf->action_root}deviceAdd" class="add_button">Dodaj nowe urządzenie</a>
    {/if}

    <h2>Zużycie energii</h2>

    {if isset($devices) && $devices|@count > 0}
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
                {foreach from=$devices item=device}
                <tr>
                    <td>{$device.device_name}</td>
                    <td>{if isset($device.energy_produced)}{$device.energy_produced}{else}Brak danych{/if}</td>
                    <td>{if isset($device.energy_consumed)}{$device.energy_consumed}{else}Brak danych{/if}</td>
                    <td>
                        <a href="{$conf->action_root}energyEdit/{$device.device_name}" class="edit_button">Edytuj</a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>Brak urządzeń do wyświetlenia</p>
    {/if}

{/block}
