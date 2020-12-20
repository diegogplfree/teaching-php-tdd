<?php

namespace Src;

use Src\SuperType\Animal;

/**
 *
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class Cat extends Animal
{
    /**
     * Display the type of animal
     *
     * @return string
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    public function display(): string
    {
        return "I am a cat!";
    }
}
