<?php namespace Packtrack\Mailers;

use Package;

class PackageMailer extends Mailer{
    public function trackingCode(Package $package)
    {
        $view = 'emails.tracking';
        $data = array(
            'reciever_name' =>  $package->reciever_name,
            'tracking'    =>  $package->tracking_code
        );
        $subject = "Your package is on it's way to you, here is your tracking key.";

        if(isset($package->reciever_mail)) return false;
        return $this->sendToMail($package->reciever_mail, $subject, $view, $data);
    }
}