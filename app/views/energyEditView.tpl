{extends file="main.tpl"}

{block name=content}
<h2>Edycja zużycia energii</h2>

<form action="{$conf->action_root}energySave" method="post">
    <input type="hidden" name="device_name" value="{$energy.device_name}" />
    
    <label for="energy_produced">Wyprodukowana energia (kWh):</label>
    <input type="text" id="energy_produced" name="energy_produced" value="{$energy.energy_produced}" required/>
    
    <label for="energy_consumed">Zużyta energia (kWh):</label>
    <input type="text" id="energy_consumed" name="energy_consumed" value="{$energy.energy_consumed}" required/>
    
    <button type="submit">Zapisz</button>
</form>
{/block}
