<?php

namespace BrainGames\Engine;

use BrainGames\Games\Even;
use BrainGames\Games\Calc;
use BrainGames\Games\Gcd;
use BrainGames\Games\Progression;
use BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function play($game, $text, $gameCount)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($text);
    for ($i = 0; $i < $gameCount; $i++) {
        switch ($game) {
            case 'even':
                [$question, $rightAnswer] = Even\getQuestion();
                break;
            case 'calc':
                [$question, $rightAnswer] = Calc\getQuestion();
                break;
            case 'gcd':
                [$question, $rightAnswer] = Gcd\getQuestion();
                break;
            case 'progression':
                [$question, $rightAnswer] = Progression\getQuestion();
                break;
            case 'prime':
                [$question, $rightAnswer] = Prime\getQuestion();
                break;
        }
        line("Question: %s", $question);
        $answer = prompt('Your answer: ');
        if ($answer === (string)$rightAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
