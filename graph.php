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
		$nodes[$key] = $node;
	}

	public function removeNode($key) {
		unset($nodes[$key]);
		$this->removePaths($key);
	}

	public function addPath($v1, $v2, $value) {
		// Check if a path already exists between them
		if ($this->existsPath($v1, $v2)) {
			return false;
		}
		$paths[] = Array(
			'v1' => $v1,
			'v2' => $v2,
			'dt' => $value
		);
	}

	public function removePath($v1, $v2) {
		foreach($paths as $key=>$path) {
			if ($path['v1'] == $v1 && $path['v2'] == $v2
				|| $path['v1'] == $v2 && $path['v2'] == $v1) {
					unset($key);
			}
		}
	}

	
}
