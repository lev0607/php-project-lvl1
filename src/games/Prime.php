<?php

namespace BrainGames\Prime;

use function BrainGames\Kernel\getCountRound;
use function BrainGames\Kernel\getRandNumber;
use function BrainGames\Kernel\kernel;

const TASK_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) return false;
    }
    return true;
}

function startGame()
{
    $getDataGame = function () {
        $data = [];
        $number = getRandNumber();
        $data['correctAnswer'] = isPrime($number) ? 'yes' : 'no';
        $data['question'] = $number;

        return $data;
    };

    kernel($getDataGame, TASK_GAME);
}