<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $loginURL;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct (User $user) {
        $env = \Config::get('app.env');
        $appURL = \Config::get('app.url');
        $localPort = '8000';
        $loginPath = 'login';

        $this->user = $user;
        $this->loginURL = $env === 'local'
            ? "$appURL:$localPort/$loginPath"
            : "$appURL/$loginPath";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build () {
        return $this->view('emails.welcome');
    }
}
