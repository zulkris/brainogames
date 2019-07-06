<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const QUESTION_COUNT = 3;

function game(callable $func) {
    //Welcome();
    $name = prompt("May I have your name?");
    line("Hello, {$name}!");
    for ($i = 1; $i <= QUESTION_COUNT; $i += 1) {
        list($question, $answer) = $func();
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        
        if ($answer !== $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        
        line("Correct!");
        
     }
}
