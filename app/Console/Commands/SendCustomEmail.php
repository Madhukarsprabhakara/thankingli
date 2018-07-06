<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\CustomEmailToAll;
use App\User;
class SendCustomEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Send:CustomEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send anu custome email with the body text of choice';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $emails=User::get(['email']);
       	foreach ($emails as $email){ 
       		echo $email->email."\n";
        	$email=$email->email;
        	\Mail::to($email)->send(new CustomEmailToAll());
        }
    }
}
