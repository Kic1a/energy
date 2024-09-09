<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class deviceCtrl {
    
    public function action_deviceList() {
        // Przykładowe dane 
        $devices = [
            ['id' => 1, 'name' => 'Kocioł indukcyjny', 'user' => 'Jan Kowalski', 'power' => 150, 'location' => 'Kotłownia olejowa'],
        ];

       
        App::getSmarty()->assign('devices', $devices);

       
        $this->generateView();
    }

  
    public function generateView() {
        App::getSmarty()->display('deviceView.tpl');
    }

    public function action_logout() {
        // Zakończenie sesji
        session_destroy();
        // Przekierowanie na stronę logowania
        App::getRouter()->redirectTo('loginView');
    }
}
