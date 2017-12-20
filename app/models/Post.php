<?php
/**
 * Created by PhpStorm.
 * User: trupe
 * Date: 12/20/2017
 * Time: 16:01
 */

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}