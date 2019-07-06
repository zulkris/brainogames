<?php

namespace BrainGames\Cli;

function even ()
{
    return function()
    {
        $question = rand(0, 100);
        $answer = $question % 2 === 0 ? 'yes' : 'no';
        return [$question, $answer];
    };
}

