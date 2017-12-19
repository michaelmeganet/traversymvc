<?php
/**
 * Created by PhpStorm.
 * User: trupe
 * Date: 12/19/2017
 * Time: 12:00
 */

class Pages extends Controller {
    public function __construct() {}

    public function index() {
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About'
        ];
        $this->view('pages/about', $data);
    }
}