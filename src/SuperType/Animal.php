<?php

namespace Src\SuperType;

use Src\Speak\SpeakBehaviour;

/**
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
abstract class Animal
{
    /**
     * @var SpeakBehaviour
     */
    protected $speakBehaviour;

    /**
     * @return string
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    abstract public function display(): string;

    /**
     * @return string
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    public function startSpeak()
    {
        return $this->speakBehaviour->speak();
    }

    /**
     * Set the Animal's Behaviour
     *
     * @param SpeakBehaviour $speakBehaviour
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    public function setSpeakBehaviour(SpeakBehaviour $speakBehaviour)
    {
        $this->speakBehaviour = $speakBehaviour;
    }

    /**
     * Get the Animal's Behaviour
     *
     * @return SpeakBehaviour
     *
     * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
     */
    public function getSpeakBehaviour(): SpeakBehaviour
    {
        return $this->speakBehaviour;
    }
}
