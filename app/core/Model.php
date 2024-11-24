<?php

namespace App\Core;

class Model {
    public Database $db;

    public function __construct() {
        $this->db = new Database();
    }
}
