<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;

class deviceEditCtrl {

    public function action_deviceEdit() {
        // Pobieranie ID urządzenia z parametrów
        $deviceId = ParamUtils::getFromCleanURL(1, true);

        // Pobranie danych urządzenia z bazy danych
        $device = App::getDB()->get("device", "*", ["id_device" => $deviceId]);

        if (!$device) {
            App::getMessages()->addMessage(new Message("Urządzenie o podanym ID nie istnieje.", Message::ERROR));
            App::getRouter()->redirectTo('deviceList');
        }

        App::getSmarty()->assign('device', $device);
        $this->generateEditView();
    }

    public function action_deviceAdd() {
        $device = [
            'id_device' => '',
            'device_name' => '',
            'rated_power' => '',
            'location' => '',
            'first_name' => '',
            'last_name' => ''
        ];

        App::getSmarty()->assign('device', $device);
        $this->generateEditView();
    }

    public function action_deviceSave() {
        // Pobranie danych z formularza
        $id_device = ParamUtils::getFromPost('id_device');
        $device_name = ParamUtils::getFromPost('device_name');
        $rated_power = ParamUtils::getFromPost('rated_power');
        $location = ParamUtils::getFromPost('location');
        $first_name = ParamUtils::getFromPost('first_name');
        $last_name = ParamUtils::getFromPost('last_name');

        // Sprawdzenie, czy aktualizować, czy dodać nowe urządzenie
        if ($id_device) {
            // Aktualizacja istniejącego urządzenia
            App::getDB()->update("device", [
                "device_name" => $device_name,
                "rated_power" => $rated_power,
                "location" => $location,
                "first_name" => $first_name,
                "last_name" => $last_name
            ], ["id_device" => $id_device]);

            App::getMessages()->addMessage(new Message("Urządzenie zostało zaktualizowane.", Message::SUCCESS));
        } else {
            // Dodanie nowego urządzenia
            App::getDB()->insert("device", [
                "device_name" => $device_name,
                "rated_power" => $rated_power,
                "location" => $location,
                "first_name" => $first_name,
                "last_name" => $last_name
            ]);

            App::getMessages()->addMessage(new Message("Nowe urządzenie zostało dodane.", Message::SUCCESS));
        }

        App::getRouter()->redirectTo('deviceList');
    }

    // Generowanie widoku edycji urządzenia
    public function generateEditView() {
        App::getSmarty()->display('deviceEditView.tpl');
    }
}
