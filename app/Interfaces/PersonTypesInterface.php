<?php

namespace App\Interfaces;

use App\Models\Person;

interface PersonTypesInterface
{
    public function publish(Person $person): void;
}
