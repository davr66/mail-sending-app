<?php

namespace App\Jobs;

use App\Mail\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $message;
    /**
     * Create a new job instance.
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->subject = $request->subject;
        $this->message = $request->message;

    }

    /**
     * Execute the job.
     */
    public function handle()
    {
$send = Mail::send('mails.contact',['data' => $this],function ($message){
    $message->from($this->email,$this->name);
    $message->to('davisreis11@gmail.com');
    $message->subject($this->subject);

});

    }
}
