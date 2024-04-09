<?php

use App\Models\Jeu;
use Discord\Builders\CommandBuilder;
use Discord\Builders\MessageBuilder;
use Discord\Discord;
use Discord\DiscordCommandClient;
use Discord\Parts\Channel\Message;
use Discord\Parts\Interactions\Command\Command;
use Discord\Parts\Interactions\Command\Option;
use Discord\Parts\Interactions\Interaction;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;
use Illuminate\Support\Facades\Artisan;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\Loop;
use React\Http\Browser;

use function React\Async\coroutine;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

/*Artisan::command('discord:load', function () {


})->purpose('Make discord bot register commands on Discord');


Artisan::command('discord:run', function () {


})->purpose('Execute discord bot so it listens to Discord');*/

Artisan::command('discord:unload', function () {


})->purpose('unload commands on Discord');
