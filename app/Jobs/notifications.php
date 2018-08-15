<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\profile_skills;
use App\User;
use App\Mail\AnyNotification;
use App\Http\Controllers\LogsController;
class notifications implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $type, $notificationSubCatId,$subCatName;
    public function __construct($type,$notificationSubCatId,$subCatName)
    {
        //
        
        $this->type=$type;
        $this->notificationSubCatId=$notificationSubCatId;
        $this->subCatName=$subCatName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //depending on the type, call appropriate function
        //1- create help request notification
        //2- response to help request
        //3- Response in the form of comments
        //
        try {
            $toEmails=array();
            switch ($this->type) {
                case 1:


                //fire a query to get emails and names of all the people with relevant skills
                
                $userIds=profile_skills::where('sub_cat_id',$this->notificationSubCatId)->get(['id']);
                foreach ($userIds as $userId)
                {
                    $email=User::where('id',$userId->id)->first();
                    
                    \Mail::to($email->email)->send(new AnyNotification($this->subCatName,$email->name));

                }
                
                
                //Send the email with the text/subject/to/



                break;
                
                case 2:
                
                break;


                default:
                return "Not the right flag";
                }
            }
            catch (\Exception $e)
            {
                $logObject = new LogsController("","400",$e->getMessage());
                $data=$logObject->dataFormattediwthStatus();
                return $data;
            }

        
        

        
        

    }
}
