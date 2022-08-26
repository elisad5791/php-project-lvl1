<?php

namespace BrainGames\Games\Even;

use BrainGames\Engine;

function getQuestion()
{
    $question = rand(0, 100);
    $answer = $question % 2 === 0 ? 'yes' : 'no';
    return [$question, $answer];
}

function even()
{
    $text = 'Answer "yes" if the number is even, otherwise answer "no".';
    $count = 3;
    $game = 'even';
    Engine\play($game, $text, $count);
}
