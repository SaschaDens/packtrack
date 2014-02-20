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

    public function trackingCode(Package $package)
    {
        $view = 'emails.mailsent';
        $data = array(
            'tracking'    =>  $package->tracking_code
        );
        $subject = 'Your package is on it\'s way to you, here is your tracking key.';

        return $this->sendToMail($package->email, $subject, $view, $data);
    }
}