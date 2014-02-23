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
        return "API index";
    }

    public function getTracking($key)
    {
        $package = Package::whereTracking_code($key)
            ->leftJoin('users as u', 'package.user_id', '=', 'u.id')
            ->first(array(
                DB::raw("concat(u.first_name, ' ', u.last_name) as sender_name"),
                DB::raw('u.email as sender_email'),
                DB::raw('u.country as sender_country'),
                DB::raw('u.city as sender_city'),
                DB::raw('u.address as sender_address'),
                DB::raw('u.postal_code as sender_postal_code'),
                DB::raw('package.reciever_name as to_reciever'),
                DB::raw('package.country as to_country'),
                DB::raw('package.address as to_address'),
                DB::raw('package.postal_code as to_postal_code'),
                DB::raw('package.tracking_code'),
                DB::raw('package.description'),
                DB::raw('package.created_at as sended_at')
            ));

        if(!$package)
        {
            return Response::json(array(
                "errors"    =>  "Tracking key does not exist"
            ), 404);
        }

        return Response::json(array(
            "Package"   =>  $package->toArray()
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
}
