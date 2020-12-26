<?php

namespace Src\Behaviour;

use Src\Speak\SpeakBehaviour;

/**
 *
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class TalkBehaviour implements SpeakBehaviour
{
    /**
     *
     * @return string
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    private function speak(): string
    {
        return "Hi!!";
    }
}
