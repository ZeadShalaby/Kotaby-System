<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CodeCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:code-commands';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make mail code expire after 30 seconds when created_at is expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //todo collection of Users
        $users = User::where('code',">","0")->get();
        foreach ($users as $user) {
            
            $user -> update(['code' => null]);
        }
        
    }
}
