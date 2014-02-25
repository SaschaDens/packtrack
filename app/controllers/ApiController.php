<?php

class ApiController extends BaseController {

    public function __construct()
    {
        App::after(function($request, $response)
        {
            $response->headers->set('Access-Control-Allow-Origin', '*');
            return $response;
        });
    }

	public function index()
    {
        return View::make('api.index');
    }

    public function getTracking($key)
    {
        /*$package = Package::whereTracking_code($key)
            ->leftJoin('users as u', 'package.user_id', '=', 'u.id')
            ->first(array(
                DB::raw("concat(u.first_name, ' ', u.last_name) as sender_name"),
                DB::raw('u.email as sender_email'),
                DB::raw('u.country as sender_country'),
                DB::raw('u.city as sender_city'),
                DB::raw('u.address as sender_address'),
                DB::raw('u.postal_code as sender_postal_code'),
                DB::raw('package.reciever_name as to_reciever'),
                DB::raw('package.city as to_city'),
                DB::raw('package.country as to_country'),
                DB::raw('package.address as to_address'),
                DB::raw('package.postal_code as to_postal_code'),
                DB::raw('package.tracking_code'),
                DB::raw('package.description'),
                DB::raw('package.created_at as sended_at'),
            ));//*/
        $packs = Package::whereTracking_code($key)->with('user', 'packagelog.location')->first();

        if(!$packs)
        {
            return Response::json(array(
                "errors"    =>  "Tracking key does not exist"
            ), 404);
        }

        $locations = $packs->packagelog->toArray();
        $loc = array();

        for($i = 0; $i < sizeof($locations); $i++)
        {
            array_push($loc, $locations[1]['location']);
        }

        $api_output = array(
            "sender_name"   =>  $packs->user->first_name . ' ' . $packs->user->last_name,
            "sender_email"  =>  $packs->user->email,
            "sender_country"  =>  $packs->user->country,
            "sender_city"  =>  $packs->user->city,
            "sender_address"  =>  $packs->user->address,
            "sender_postal_code"  =>  $packs->user->postal_code,
            "to_reciever"   =>  $packs->reciever_name,
            "to_city"   =>  $packs->city,
            "to_country"   =>  $packs->country,
            "to_address"   =>  $packs->address,
            "to_postal_code"   =>  $packs->postal_code,
            "tracking_code"   =>  $packs->tracking_code,
            "description"   =>  $packs->description,
            "sended_at"   =>  $packs->created_at->toDateTimeString(),
            "locations" =>  $loc
        );

        return Response::json(array(
            "Package"   =>  $api_output
        ), 200);

        //return $package;
    }

    public function getLocations()
    {
        // 1 DAG CACHE!!
        $locations = Location::distribution()->remember(60*24)->get();

        if(!$locations)
        {
            return Response::json(array(
                "errors"    =>  "No locations found."
            ), 404);
        }

        return Response::json(array(
            "Locations"   =>  $locations->toArray()
        ), 200);
    }

    public function postAuth(){
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Response::json(array(
                "Auth"   =>  'Success'
            ), 200);
        }
        return Response::json(array(
            "Auth"   =>  'Fail'
        ), 401);
    }

    public function postLocate()
    {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            if(Input::get('lat') and Input::get('long'))
            {
                $location = Auth::user()->location;
                $location->lat = Input::get('lat');
                $location->long = Input::get('long');
                $location->save();
                return Response::json(array(
                    "success"   =>  "Added user"
                ), 200);
            }
            return Response::json(array(
                "Missing"   =>  "Missing parameters"
            ), 400);
        }
        return Response::json(array(
            "Auth"   =>  'Fail'
        ), 401);
    }

    public function postPackage()
    {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            if(Input::get('tracking_code'))
            {
                $package = Package::whereTrackingCode(Input::get('tracking_code'))->first();
                if($package)
                {
                    $package->status_code = 4;
                    $package->save();
                    return Response::json(array(
                        "Success"   =>  'Great Success'
                    ), 200);
                }
                return Response::json(array(
                    "Error"   =>  'Something went wrong'
                ), 400);
            }
        }
        return Response::json(array(
            "Auth"   =>  'Fail'
        ), 401);
    }
}
