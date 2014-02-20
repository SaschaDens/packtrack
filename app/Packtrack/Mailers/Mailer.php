<?php namespace Packtrack\Mailers;

use Mail;

abstract class Mailer {

    public function sendToUser($user, $subject, $view, $data = array())
    {
        Mail::queue($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)
                ->subject($subject);
        });
    }

    public function sendToMail($email, $subject, $view, $data = array())
    {
        Mail::queue($view, $data, function($message) use($email, $subject)
        {
            $message->to($email)
                ->subject($subject);
        });
    }
}