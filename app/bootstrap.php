<?php
/**
 * Created by PhpStorm.
 * User: trupe
 * Date: 12/18/2017
 * Time: 19:08
 */
// Load config
require_once 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});