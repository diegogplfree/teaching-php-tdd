<?php

namespace Src\Behaviour;

use Src\Speak\SpeakBehaviour;

/**
 *
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class BarkBehaviour implements SpeakBehaviour
{
    /**
     *
     * @return string
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    public function speak(): string
    {
        return "Whofff!!";
    }
}
