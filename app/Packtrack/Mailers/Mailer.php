<?php namespace Packtrack\Mailers;

use Mail;

abstract class Mailer {

    public function sendTo($object, $subject, $view, $data = array())
    {
        Mail::queue($view, $data, function($message) use($object, $subject)
        {
            $message->to($object->email)
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