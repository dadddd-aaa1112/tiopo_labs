<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BFSController extends Controller
{
    public function calculateBFS($graph, $start)
    {
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

    public function getGraphBFS()
    {
        $graph = array(
            'D' => array('B'),
            'E' => array('B', 'F'),
            'F' => array('C', 'E'),
            'A' => array('B', 'C'),
            'B' => array('A', 'D', 'E'),
            'C' => array('A', 'F'),

        );

        $start = 'A';
        // dd($this->calculateBFS($graph, $start));
        return $this->calculateBFS($graph, $start);
    }


}
