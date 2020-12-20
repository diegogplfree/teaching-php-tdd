<?php

namespace Src;
use PHPUnit\Framework\TestCase;
use Src\Behaviour\BarkBehaviour;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class DogTest extends TestCase
{	
	/**
	 * test Dog Constructor
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testDog()
	{
		$dog = new Dog();
		$this->assertInstanceOf(Dog::class, $dog);
	}

	/**
	 * test setSpeakBehaviour/getSpeakBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSetSpeakBehaviour()
	{
		$dog = new Dog();
		$dog->setSpeakBehaviour($this->getBehaviour());
		$this->assertInstanceOf(BarkBehaviour::class, $dog->getSpeakBehaviour());
	}

	/**
	 * @dataProvider dogDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testStartSpeak(Dog $dog)
	{
		$this->assertIsString($dog->startSpeak());
	}

	/**
	 * @dataProvider dogDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testDisplay(Dog $dog)
	{
		$this->assertIsString($dog->display());
	}

	/**
	 * Dog dataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function dogDataProvider()
	{		
		$dog = new Dog();
		$dog->setSpeakBehaviour($this->getBehaviour());						
		return [[$dog]];
	}

	/**
	 * @return BarkBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	private function getBehaviour()
	{
		$barkBehaviour = $this->getMockBuilder(BarkBehaviour::class)
										->setMethods(['speak'])
										->getMock();
		return $barkBehaviour;
	}
}