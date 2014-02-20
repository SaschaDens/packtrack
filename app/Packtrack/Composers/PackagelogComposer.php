<?php namespace Packtrack\Composers;

use Auth;
use Packagelog;

class PackagelogComposer
{
    public function compose($view)
    {
        $location = Auth::user()->location;
        $packages = Packagelog::Location($location->id)
            ->with('package')
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();
        $view->with('location', $location);
        $view->with('packages', $packages);
    }
}