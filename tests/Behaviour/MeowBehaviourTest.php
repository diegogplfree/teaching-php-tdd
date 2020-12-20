<?php

namespace Src\Behaviour;

use PHPUnit\Framework\TestCase;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class MeowBehaviourTest extends TestCase 
{
	
	/**
	 * test BarkBehavior construct
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testMeowBehaviour()
	{
		$behaviour = new MeowBehaviour();
		$this->assertInstanceof(MeowBehaviour::class, $behaviour);
	}

	/**
	 * @dataProvider behaviourDataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSpeak(MeowBehaviour $behaviour)
	{
		$this->assertIsString($behaviour->speak());
	}

	/**
	 * MeowBehaviour dataprovider
	 * 
	 * @return MeowBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function behaviourDataprovider()
	{
		return [[new MeowBehaviour()]];
	}
}