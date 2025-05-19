<?php

use App\Console\Commands\DeleteInactiveUsersWithoutConversations;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\MarkInactiveUsers;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
Schedule::command(MarkInactiveUsers::class)->everyMinute();
Schedule::command(DeleteInactiveUsersWithoutConversations::class)->everyMinute();
