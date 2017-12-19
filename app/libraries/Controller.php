<?php
/**
 * Created by PhpStorm.
 * User: trupe
 * Date: 12/18/2017
 * Time: 19:06
 * Base controller
 * Loads models and views
 */
class Controller {
    // Load model
    public function model($model) {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = []) {
        // Check for the view file
        if(file_exists('../app/views/' . $view . '.php')) {
            // Require view file
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist');
        }
    }
}
