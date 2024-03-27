<?php

namespace Omisai\Continents;

class Collection
{
    protected $continents = [];

    public function __construct()
    {
        $this->loadContinents();
    }

    protected function loadContinents()
    {
        $directory = new \DirectoryIterator(__DIR__ . '/Models');
        foreach ($directory as $fileinfo) {
            if ($fileinfo->isFile() && $fileinfo->getExtension() === 'php') {
                $className = $fileinfo->getBasename('.php');
                $classFullName = "Omisai\\Continents\\Models\\$className";
                if (class_exists($classFullName)) {
                    $this->continents[] = new $classFullName();
                }
            }
        }
    }

    public function getContinents(): array
    {
        return $this->continents;
    }

    public function getContinentByCode(string $code): ?Continent
    {
        foreach ($this->continents as $continent) {
            if ($continent->code === $code) {
                return $continent;
            }
        }

        return null;
    }

    public function getContinentByName(string $name): ?Continent
    {
        foreach ($this->continents as $continent) {
            if ($continent->name === $name) {
                return $continent;
            }
        }

        return null;
    }
}
