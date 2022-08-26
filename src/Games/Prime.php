<?php

namespace BrainGames\Games\Prime;

use BrainGames\Engine;

function isPrime(int $num)
{
    for ($i = 2; $i < $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function getQuestion()
{
    $num = rand(2, 100);
    $question = "$num";
    $answer = isPrime($num) ? 'yes' : 'no';
    return [$question, $answer];
}

function prime()
{
    $text = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $count = 3;
    $game = 'prime';
    Engine\play($game, $text, $count);
}
