<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\loginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new loginForm();
    }

public function validate() {
    $this->form->login = ParamUtils::getFromRequest('login');
    $this->form->pass = ParamUtils::getFromRequest('pass');

    // Sprawdzanie, czy login i hasło zostały wprowadzone
    if (empty($this->form->login)) {
        Utils::addErrorMessage('Nie podano loginu');
        return false;
    }
    if (empty($this->form->pass)) {
        Utils::addErrorMessage('Nie podano hasła');
        return false;
    }

    //pobranie użytkownika na podstawie loginu i hasła
    try {
        $user = App::getDB()->get("user", [
            "id_user",
            "login",
            "pass",
            "rank"
        ], [
            "login" => $this->form->login,
            "pass" => $this->form->pass
        ]);

        if ($user) {
            // Przypisanie roli na podstawie rank
            if ($user['rank'] == 'admin') {
                RoleUtils::addRole('admin');
                $_SESSION['role'] = 'admin'; // zapisanie roli w sesji
            } else {
                RoleUtils::addRole('user');
                $_SESSION['role'] = 'user'; // Zapisanie roli w sesji
            }
            return true;
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
            return false;
        }

    } catch (\PDOException $e) {
        Utils::addErrorMessage('Błąd podczas logowania.');
        return false;
    }
}


    public function action_loginShow() {
        $this->generateView();
    }

   public function action_login() {
    // sprawdźenie, czy formularz został przesłany
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("deviceList");
        } else {
            //pozostań na stronie logowania
            $this->generateView();
        }
    } else {
        $this->generateView();
    }
}


    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('loginView.tpl');
    }

}
