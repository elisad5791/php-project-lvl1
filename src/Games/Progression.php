<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

function getProgression($start, $step, $count, $missing)
{
    $result = [];
    $current = $start;
    for ($i = 0; $i < $count; $i++) {
        if ($i === $missing) {
            $answer = $current;
            $result[] = '..';
        } else {
            $result[] = $current;
        }
        $current += $step;
    }
    $question = implode(' ', $result);
    return [$question, $answer];
}

function getQuestion()
{
    $start = rand(0, 100);
    $step = rand(1, 10);
    $missing = rand(1, 8);
    $count = 10;
    [$question, $answer] = getProgression($start, $step, $count, $missing);
    return [$question, $answer];
}

function progression()
{
    $text = 'What number is missing in the progression?';
    $count = 3;
    $game = 'progression';
    Engine\play($game, $text, $count);
}
