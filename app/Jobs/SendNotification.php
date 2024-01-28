<?php

namespace App\Jobs;

use App\Mail\SendNotification as MailSendNotification;
use App\Models\People;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $peoples = People::all();

        foreach ($peoples as $people) {
            Mail::to($people->email)->send(new MailSendNotification('This is people add to system alert', 'This is people add to system alert mail body'));

            if($people->id === 5) {
                break;
            }
        }
    }
}
