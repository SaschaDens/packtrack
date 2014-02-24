<?php namespace Packtrack\Mailers;

use Package;

class PackageMailer extends Mailer{
    public function trackingCode(Package $package)
    {
        $view = 'emails.tracking';
        $data = array(
            'tracking'    =>  $package->tracking_code
        );
        $subject = "Your package is now trackable!";

        if(isset($package->reciever_mail)) return false;
        return $this->sendTo($package->reciever_mail, $subject, $view, $data);
    }
}