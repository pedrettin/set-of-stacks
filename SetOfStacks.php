<?php 

class SetOfStacks {
	
	private $stacks = array(array());
	
	private $stackLimit;
	
	public function __construct ($stackLimit) {
		$this->stackLimit = $stackLimit;
	}
	
	/**
	* pushes an item on the latest stack
	* @param string $item
	*/
	public function push ($item) {
		$stack = &$this->stacks[sizeof($this->stacks)-1];
		if (sizeof($stack) >= $this->stackLimit) {
			array_push($this->stacks, array());
			$stack = &$this->stacks[sizeof($this->stacks)-1];
		}
		array_push($stack, $item);
	}
	
	/**
	* pops the latest item on the stack
	* @return string 
	*/
	public function pop () {
		$stack = &$this->stacks[sizeof($this->stacks)-1];
		if (empty($stack)) { 
			if (sizeof($this->stacks) == 1) { return null; }
			unset($this->stacks[sizeof($this->stacks)-1]);
			return $this->pop(); 
		}
		return array_pop($stack);
	}
	
	/**
	* returns the latest item on stack
	* @return string
	*/
	public function peek () {
		$stack = &$this->stacks[sizeof($this->stacks)-1];
		if (empty($stack)) { 
			if (sizeof($this->stacks) == 1) { return null; }
			unset($this->stacks[sizeof($this->stacks)-1]);
			return $this->peek(); 
		}
		return $stack[sizeof($stack) -1];
	}
	
	/**
	* returns the maximum size of each individual stack
	* @return int 
	*/
	public function getStackLimit() {
		return $this->stackLimit;
	}
	
}


?>