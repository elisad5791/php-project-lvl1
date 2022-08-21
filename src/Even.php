<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function play()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 100);
        line("Question: %s", $num);
        $answer = prompt('Your answer: ');
        $rightAnswer = $num % 2 === 0 ? 'yes' : 'no';
        if ($answer === $rightAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
