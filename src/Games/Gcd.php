<?php

namespace BrainGames\Games\Gcd;

use BrainGames\Engine;

function getGcd(int $num1, int $num2)
{
    $current = $num1;
    while ($current > 1) {
        if ($num1 % $current === 0 && $num2 % $current === 0) {
            return $current;
        }
        $current--;
    }
    return 1;
}

function getQuestion()
{
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $question = "$num1 $num2";
    $answer = getGcd($num1, $num2);
    return [$question, $answer];
}

function gcd()
{
    $text = 'Find the greatest common divisor of given numbers.';
    $count = 3;
    $game = 'gcd';
    Engine\play($game, $text, $count);
}
