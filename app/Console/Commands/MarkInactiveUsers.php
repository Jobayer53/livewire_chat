<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MarkInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mark-inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mark inactive users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $threshold = now()->subMinutes(5);
        DB::table('users')
            ->whereNotExists(function ($query) use ($threshold) {
                $query->select(DB::raw(1))
                    ->from('sessions')
                    ->whereRaw('sessions.user_id = users.id')
                    ->where('sessions.last_activity', '>=', $threshold->timestamp);
            })->update(['is_online' => 0]);
        // DB::table('sessions')
        //     ->where('last_activity', '<', $threshold->timestamp)
        //     ->pluck('user_id')
        //     ->unique()
        //     ->filter()
        //     ->each(function ($userId) {
        //         User::where('id', $userId)->update(['is_online' => 0]);
        //     });

        $this->info('Inactive users updated.');
    }
}
