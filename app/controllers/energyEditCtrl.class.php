<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;

class energyEditCtrl {

public function action_energyEdit() {
    // Pobierz device_name z URL-a
    $device_name = ParamUtils::getFromCleanURL(1, true);

    // Pobierz dane o energii z bazy danych dla danego urządzenia na podstawie device_name
    $energy = App::getDB()->get("energy", "*", ["device_name" => $device_name]);

  
    if (!$energy) {
        $energy = [
            'device_name' => $device_name,
            'energy_produced' => '',
            'energy_consumed' => ''
        ];
    }

    App::getSmarty()->assign('energy', $energy);
    $this->generateEditView();
}


    // Dodanie nowych danych zużycia energii
    public function action_energyAdd() {
        $energy = [
            'id_energy' => '',
            'device_name' => '',
            'energy_produced' => '',
            'energy_consumed' => ''
        ];

        App::getSmarty()->assign('energy', $energy);
        $this->generateEditView();
    }

    // Zapisanie danych zużycia energii
 public function action_energySave() {
    $device_name = ParamUtils::getFromPost('device_name');
    $energy_produced = ParamUtils::getFromPost('energy_produced');
    $energy_consumed = ParamUtils::getFromPost('energy_consumed');

    // Sprawdzenie, czy istnieją dane o energii dla tego urządzenia
    $exists = App::getDB()->has("energy", ["device_name" => $device_name]);

    if ($exists) {
        // Aktualizacja danych o energii
        App::getDB()->update("energy", [
            "energy_produced" => $energy_produced,
            "energy_consumed" => $energy_consumed
        ], ["device_name" => $device_name]);

        App::getMessages()->addMessage(new Message("Dane o energii zostały zaktualizowane.", Message::SUCCESS));
    } else {
        // Dodanie nowych danych o energii
        App::getDB()->insert("energy", [
            "device_name" => $device_name,
            "energy_produced" => $energy_produced,
            "energy_consumed" => $energy_consumed
        ]);

        App::getMessages()->addMessage(new Message("Nowe dane o energii zostały dodane.", Message::SUCCESS));
    }

    App::getRouter()->redirectTo('deviceList');
}


    public function generateEditView() {
        App::getSmarty()->display('energyEditView.tpl');
    }
}
