<?php

function testRow($row, $value)
{
    $score = 0;
    $suite = 0;
    foreach ($row as $cell) {

        if ($cell == $value) {
            $suite++;
            if ($suite == 5) {
                $score++;
                $suite = 0;
            }
        } else {
            $suite = 0; 
        }

    }
    return $score;
}

function testRows($game, $value) 
{
    $score = 0;
    foreach ($game as $row) {
       $score += testRow($row, $value);
    }
    return $score;
}

$game = [
    ['o', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x'],
    ['o', 'o', 'o', 'o', 'o', 'o', 'x', 'x', 'x', 'x', 'x', 'x'],
  ];
  
$result = testRows($game, 'x');
var_dump($result);

$result = testRows($game, 'o');
var_dump($result);
