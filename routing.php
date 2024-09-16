<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'loginCtrl');
Utils::addRoute('deviceList',       'deviceCtrl',           ['user','admin']);
Utils::addRoute('deviceAdd',        'deviceEditCtrl',       ['admin']);
Utils::addRoute('deviceEdit',       'deviceEditCtrl',       ['user','admin']);
Utils::addRoute('deviceSave',       'deviceEditCtrl',       ['admin']);
Utils::addRoute('deviceDelete',     'deviceCtrl',           ['admin']);
Utils::addRoute('energyEdit',       'energyEditCtrl',       ['user','admin']);
Utils::addRoute('energySave',       'energyEditCtrl',       ['user','admin']);
Utils::addRoute('energyDelete',     'deviceCtrl',           ['admin']);

