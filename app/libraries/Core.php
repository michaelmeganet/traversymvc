<?php
/**
 * Created by PhpStorm.
 * User: trupe
 * Date: 12/18/2017
 * Time: 19:05
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $this->getUrl();
    }

    public function getUrl() {
    }
}