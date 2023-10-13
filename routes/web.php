<?php

use App\Interfaces\PersonTypesInterface;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Person $person,PersonTypesInterface $personTypesInterface) {
    $person->setDocument(mt_rand(10000000000000, 9999999999999999));
    $personTypesInterface->publish($person);
});
