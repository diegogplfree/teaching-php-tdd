<?php

namespace Src\Behaviour;

use Src\Speak\SpeakBehaviour;

class MeowBehaviour implements SpeakBehaviour
{
    /**
     *
     * @return string
     */
    public function speak(): string
    {
        return "Meow!!";
    }
}
