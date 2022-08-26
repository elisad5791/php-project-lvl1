<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

function getQuestion()
{
    $operations = ['+', '-', '*'];
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $operation = $operations[rand(0, 2)];
    $question = "$num1 $operation $num2";
    switch ($operation) {
        case '+':
            $answer = $num1 + $num2;
            break;
        case '-':
            $answer = $num1 - $num2;
            break;
        case '*':
            $answer = $num1 * $num2;
            break;
        default:
            $answer = '';
    }
    return [$question, $answer];
}

function calc()
{
    $text = 'What is the result of the expression?';
    $count = 3;
    $game = 'calc';
    Engine\play($game, $text, $count);
}
