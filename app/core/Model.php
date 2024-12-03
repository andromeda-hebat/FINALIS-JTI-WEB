<?php

namespace App\Core;

abstract class Model
{
    public function __set(string $name, mixed $value): void { }
}
