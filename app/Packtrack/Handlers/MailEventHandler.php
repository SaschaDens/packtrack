<?php namespace Packtrack\Handlers;

use Packtrack\Mailers\UserMailer;
use Packtrack\Mailers\PackageMailer;
use User;
use Package;

class MailEventHandler {
    public function sendRegister(User $user)
    {
        $mailer = new UserMailer();
        $mailer->welcome($user);
    }

    public function sendBarcode(Package $package)
    {
        $mailer = new PackageMailer();
        $mailer->sendBarcode($package);
    }

    public function sendTracking(Package $package)
    {
        $mailer = new PackageMailer();
        $mailer->trackingCode($package);
    }

    public function subscribe($events)
    {
        $events->listen('mail.register', 'Packtrack\Handlers\MailEventHandler@sendRegister');
        $events->listen('mail.barcode', 'Packtrack\Handlers\MailEventHandler@sendBarcode');
        $events->listen('mail.tracking', 'Packtrack\Handlers\MailEventHandler@sendTracking');
    }
} 