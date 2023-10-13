<?php

namespace App\Http\Controllers;

use App\Interfaces\PersonTypesInterface;
use App\Models\Person;

class PersonController extends Controller
{
    public function save(Person $person, PersonTypesInterface $personTypesInterface): void
    {
        dd($personTypesInterface->publish($person));
    }
}
