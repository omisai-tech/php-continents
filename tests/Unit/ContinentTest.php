<?php

use Omisai\Continents\Continent;
use Omisai\Continents\Models\Europe;

it('can get the name in English', function () {
    $continent = new Europe;

    expect($continent->getName())->toBe('Europe');
});
it('can access the name in English without get', function () {
    $continent = new Europe;

    expect($continent->name)->toBe('Europe');
});

it('can validate a valid locale', function () {
    Continent::validate('en');
})->throwsNoExceptions();

it('throws an exception for an invalid locale', function () {
    Continent::validate('invalid');
})->throws(\InvalidArgumentException::class);

it('can access other locale', function () {
    $continent = new Europe;

    expect($continent->getName('hu'))->toBe('Európa');
    expect($continent->getName('es'))->toBe('Europa');
});
