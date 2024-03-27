<?php

use Omisai\Continents\Collection;
use Omisai\Continents\Continent;

it('should return an array of continents', function () {
    $collection = new Collection();
    $continents = $collection->getContinents();

    expect($continents)->toBeArray();
    expect($continents)->toHaveCount(7);
    expect($continents[0])->toBeInstanceOf(Continent::class);
});

it('should return a continent by code', function () {
    $collection = new Collection();
    $continent = $collection->getContinentByCode('AF');

    expect($continent)->toBeInstanceOf(Continent::class);
    expect($continent->code)->toBe('AF');
});

it('should return a continent by name', function () {
    $collection = new Collection();
    $continent = $collection->getContinentByName('Africa');

    expect($continent)->toBeInstanceOf(Continent::class);
    expect($continent->name)->toBe('Africa');
});
