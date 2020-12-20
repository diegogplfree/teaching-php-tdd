<?php

namespace Src;
use PHPUnit\Framework\TestCase;
use Src\Behaviour\BarkBehaviour;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class CatTest extends TestCase
{	
	/**
	 * test Cat Constructor
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testCat()
	{
		$cat = new Cat();
		$this->assertInstanceOf(Cat::class, $cat);
	}

	/**
	 * test setSpeakBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSetSpeakBehaviour()
	{
		$cat = new Cat();
		$cat->setSpeakBehaviour($this->getBehaviour());
		$this->assertInstanceOf(BarkBehaviour::class, $cat->getSpeakBehaviour());
	}

	/**
	 * @dataProvider catDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testStartSpeak(Cat $cat)
	{
		$this->assertIsString($cat->startSpeak());
	}

	/**
	 * @dataProvider catDataProvider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testDisplay(Cat $cat)
	{
		$this->assertIsString($cat->display());
	}

	/**
	 * Cat dataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function catDataProvider()
	{		
		$cat = new Cat();
		$cat->setSpeakBehaviour($this->getBehaviour());						
		return [[$cat]];
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