<?php

namespace App\Services;
use App\Interfaces\PersonTypesInterface;
use App\Models\Person;

class FisicalPersonService implements PersonTypesInterface
{
    public function publish(Person $person): void
    {
        dd('FISICAL-' . $person->type . ': ' . $person->getDocument());
    }
}
