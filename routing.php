<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'loginCtrl');
Utils::addRoute('deviceList',   'deviceCtrl',     ['user','admin']);
Utils::addRoute('deviceNew',    'deviceEditCtrl',     ['user','admin']);
Utils::addRoute('deviceEdit',   'deviceEditCtrl',     ['user','admin']);
Utils::addRoute('deviceSave',   'deviceCtrl',     ['user','admin']);
Utils::addRoute('deviceDelete', 'deviceCtrl',     ['admin']);


