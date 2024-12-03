<?php

namespace App\Core;

abstract class Repository
{
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
