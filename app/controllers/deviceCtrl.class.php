<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class deviceCtrl {
    
    public function action_deviceList() {
        // Wywołanie metody renderującej widok
        $this->generateView();
    }

    // Osobna metoda do renderowania widoku
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
