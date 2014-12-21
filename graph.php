<?php

class GRAPH {

	private $paths = array();
	private $nodes = array();

	function __construct($file=null) {
		if (!empty($file)) {
			// build from file	
		}
	}

	public function addNode($node) {
		$key = uniqid();
		$this->nodes[$key] = $node;
	}

	public function removeNode($key) {
		unset($nodes[$key]);
		$this->removePaths($key);
	}

	public function addPath($v1, $v2, $value) {
		if (!in_array($v1, $this->nodes) || !in_array($v2, $this->nodes)) {
			return false;
		}
		$v1 = array_search($v1, $this->nodes);
		$v2 = array_search($v2, $this->nodes);
		// Check if a path already exists between them
//		if ($this->existsPath($v1, $v2)) {
//			return false;
//		}
		$this->paths[] = Array(
			'v1' => $v1,
			'v2' => $v2,
			'dt' => $value
		);
	}

	public function removePath($v1, $v2) {
		$v1 = array_search($v1, $this->nodes);
		$v2 = array_search($v2, $this->nodes);
		foreach($this->paths as $key=>$path) {
			if ($path['v1'] == $v1 && $path['v2'] == $v2
				|| $path['v1'] == $v2 && $path['v2'] == $v1) {
					unset($this->paths[$key]);
			}
		}
	}

	
}
