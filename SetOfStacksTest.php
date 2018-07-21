<?php 

include('./SetOfStacks.php');
use PHPUnit\Framework\TestCase;

class SetOfStacksTest extends TestCase {
	
	public function testCreate () {
		$SetOfStacks = new SetOfStacks(3);
		$this->assertSame($SetOfStacks->getStackLimit(), 3, "SetOfStacks set stack limit wrong");
	}
	
	public function testPushPop () {
		$SetOfStacks = new SetOfStacks(3);
		$SetOfStacks->push('item1');
		$SetOfStacks->push('item2');
		$SetOfStacks->push('item3');
		$SetOfStacks->push('item4');
		$this->assertSame($SetOfStacks->peek(), 'item4', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item4', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item3', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item2', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item1', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), null, "Wrong item at the top of the stack");
	}
	
	public function testPeek () {
		$SetOfStacks = new SetOfStacks(3);
		$SetOfStacks->push('item1');
		$SetOfStacks->push('item2');
		$SetOfStacks->push('item3');
		$SetOfStacks->push('item4');
		$this->assertSame($SetOfStacks->peek(), 'item4', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->peek(), 'item4', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item4', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item3', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item2', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->pop(), 'item1', "Wrong item at the top of the stack");
		$this->assertSame($SetOfStacks->peek(), null, "Wrong item at the top of the stack");
	}
	
}

 ?>