<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BFSUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_get_bfs_unit(): void
    {
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

        $expectedArr = [
            0 => "A",
            1 => "B",
            2 => "C",
            3 => "D",
            4 => "E",
            5 => "F",
        ];

        $this->assertEquals($expectedArr, $result);
    }
}
