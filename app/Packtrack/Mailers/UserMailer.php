<?php namespace Packtrack\Mailers;

use User;

class UserMailer extends Mailer {

    public function welcome(User $user)
    {
        $view = 'emails.activation';
        $data = array(
            'activation'    =>  $user->activation_key
        );
        $subject = 'Welcome to PackAndTrack';

        return $this->sendToUser($user, $subject, $view, $data);
    }
}