<?php

namespace App\Console\Commands;

use App\Mail\NotifyStudents;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'EmailNotify:notifiction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email to notify';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$user = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        foreach($emails as $email){
            Mail::to($email)->send(new NotifyStudents);
        }
    }
}
