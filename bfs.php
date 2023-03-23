<?php

//php bfs.php


function bfs($graph, $start) {
    $visited = array();
    $queue = array($start);

    while ($queue) {
        $vertex = array_shift($queue);
        if (!in_array($vertex, $visited)) {
            $visited[] = $vertex;
            $neighbors = $graph[$vertex];
            foreach ($neighbors as $neighbor) {
                if (!in_array($neighbor, $visited)) {
                    $queue[] = $neighbor;
                }
            }
        }
    }

    return $visited;
}

// пример использования
$graph = array(
    'D' => array('B'),
    'E' => array('B', 'F'),
    'F' => array('C', 'E'),
    'A' => array('B', 'C'),
    'B' => array('A', 'D', 'E'),
    'C' => array('A', 'F'),

);

$start = 'A';
$result = bfs($graph, $start);

var_dump($result);

