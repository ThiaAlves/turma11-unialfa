<?php

class Dog
{
    public function __construct(Breed $breed)
    {
        $this->breed = $breed;
    }
}

class Breed
{
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}

echo $dog->breed->color;

class DogCorreto
{
    public function __construct(Breed $breed)
    {
        $this->breed = $breed;
    }

    public function getBreedColor()
    {
        return $this->breed->getColor();
    }
}