<?php

require_once('graph.php');
$graph = new GRAPH();

$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');

$graph->addPath('A', 'B', 3);

var_dump($graph);

$graph->removePath('A', 'B');

var_dump($graph);
