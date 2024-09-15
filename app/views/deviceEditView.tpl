{extends file="main.tpl"}

{block name=content}
<h2>Edytuj urządzenie</h2>

<form action="{$conf->action_root}deviceSave" method="post">
    <input type="hidden" name="id_device" value="{$device.id_device}" />
    <label for="device_name">Nazwa urządzenia:</label>
    <input type="text" name="device_name" value="{$device.device_name}" required /><br/>

    <label for="rated_power">Moc znamionowa [kW]:</label>
    <input type="number" name="rated_power" value="{$device.rated_power}" required /><br/>

    <label for="location">Lokalizacja:</label>
    <input type="text" name="location" value="{$device.location}" required /><br/>

    <label for="first_name">osoba nadzorująca (imię):</label>
    <input type="text" name="first_name" value="{$device.first_name}" required /><br/>

    <label for="last_name">osoba nadzorująca (nazwisko):</label>
    <input type="text" name="last_name" value="{$device.last_name}" required /><br/>

    <input type="submit" value="Zapisz zmiany" />
</form>
{/block}
