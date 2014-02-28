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

        return $this->sendToMail($package->reciever_mail, $subject, $view, $data);
    }

    public function sendBarcode(Package $package)
    {
        $view = 'emails.barcode';
        $data = array(
            'tracking_code'    =>  $package->tracking_code
        );
        $subject = "Your barcode for your package.";

        if(is_null($package->user->email))
        {
            return $this->sendToMail($package->user->email, $subject, $view, $data);
        }
        return false;
    }
}