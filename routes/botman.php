<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Whats up how can I help you');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('My First Message', function ($bot) {
    $bot->reply('Your First Response');
});

$botman->hears('call me {name}', function ($bot, $name) {
    $bot->reply('I will call you: '.$name .'.....'. 'Incase you would like to change it just say your name again');
});

