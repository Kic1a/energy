<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\Utils;

class deviceCtrl {

   public function action_deviceList() {
    try {
        // Pobieranie danych z tabeli 'device' i 'energy' na podstawie 'device_name'
        $devices = App::getDB()->select('device', [
            '[>]energy' => ['device_name' => 'device_name'] // Łączenie na podstawie 'device_name'
        ], [
            'device.id_device',
            'device.device_name',
            'device.rated_power',
            'device.location',
            'device.first_name',
            'device.last_name',
            'energy.energy_produced',
            'energy.energy_consumed'
        ]);

        if (!$devices) {
            Utils::addErrorMessage('Brak danych do wyświetlenia.');
        } else {
            App::getSmarty()->assign('devices', $devices);
        }

    } catch (\PDOException $e) {
        Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
    }

    $this->generateView();
}


    public function action_deviceDelete() {
        $deviceId = ParamUtils::getFromCleanURL(1, true);

        if ($deviceId) {
            try {
                // Usuwanie urządzenia na podstawie id_device
                App::getDB()->delete("device", [
                    "id_device" => $deviceId
                ]);

                Utils::addInfoMessage("Urządzenie zostało pomyślnie usunięte.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych podczas usuwania: ' . $e->getMessage());
            }
        } else {
            Utils::addErrorMessage("Nieprawidłowe ID urządzenia.");
        }

        // Przekierowanie po usunięciu na listę urządzeń
        App::getRouter()->redirectTo('deviceList');
    }

    public function generateView() {
        App::getSmarty()->display('deviceView.tpl');
    }
}
