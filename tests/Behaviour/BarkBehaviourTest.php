<?php

namespace Src\Behaviour;

use PHPUnit\Framework\TestCase;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class BarkBehaviourTest extends TestCase 
{
	
	/**
	 * test BarkBehavior construct
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testBarkBehaviour()
	{
		$behaviour = new BarkBehaviour();
		$this->assertInstanceof(BarkBehaviour::class, $behaviour);
	}

	/**
	 * @dataProvider behaviourDataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSpeak(BarkBehaviour $behaviour)
	{
		$this->assertIsString($behaviour->speak());
	}

	/**
	 * BarkBehaviour dataprovider
	 * 
	 * @return BarkBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function behaviourDataprovider()
	{
		return [[new BarkBehaviour()]];
	}
}