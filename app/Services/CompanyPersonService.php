<?php

namespace App\Services;

use App\Interfaces\PersonTypesInterface;
use App\Models\Person;

class CompanyPersonService implements PersonTypesInterface
{
    
    public function publish(Person $person): void
    {
        dd('COMPANY-' . $person->type . ': ' . $person->getDocument());
    }
}
