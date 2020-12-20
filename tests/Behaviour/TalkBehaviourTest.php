<?php

namespace Src\Behaviour;

use PHPUnit\Framework\TestCase;

/**
 * 
 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
 */
class TalkBehaviourTest extends TestCase 
{
	
	/**
	 * test BarkBehavior construct
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testTalkBehaviour()
	{
		$behaviour = new TalkBehaviour();
		$this->assertInstanceof(TalkBehaviour::class, $behaviour);
	}

	/**
	 * @dataProvider behaviourDataprovider
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function testSpeak(TalkBehaviour $behaviour)
	{
		$this->assertIsString($behaviour->speak());
	}

	/**
	 * TalkBehaviour dataprovider
	 * 
	 * @return TalkBehaviour
	 * 
	 * @author  Diego Arboleda <ing.diego.fernando.arboleda@gmail.com>
	 */
	public function behaviourDataprovider()
	{
		return [[new TalkBehaviour()]];
	}
}