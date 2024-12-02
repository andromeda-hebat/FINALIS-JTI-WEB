<?php

namespace App\Core;

abstract class Model
{
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
