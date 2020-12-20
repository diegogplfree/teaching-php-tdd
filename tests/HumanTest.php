<?php

namespace Src;
use PHPUnit\Framework\TestCase;
use Src\Behaviour\BarkBehaviour;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class HumanTest extends TestCase
{	
	/**
	 * test Human Constructor
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testHuman()
	{
		$human = new Human();
		$this->assertInstanceOf(Human::class, $human);
	}

	/**
	 * test setSpeakBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSetSpeakBehaviour()
	{
		$human = new Human();
		$human->setSpeakBehaviour($this->getBehaviour());
		$this->assertInstanceOf(BarkBehaviour::class, $human->getSpeakBehaviour());
	}

	/**
	 * @dataProvider humanDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testStartSpeak(Human $human)
	{
		$this->assertIsString($human->startSpeak());
	}

	/**
	 * @dataProvider humanDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testDisplay(Human $human)
	{
		$this->assertIsString($human->display());
	}

	/**
	 * Human dataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function humanDataProvider()
	{		
		$human = new Human();
		$human->setSpeakBehaviour($this->getBehaviour());						
		return [[$human]];
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