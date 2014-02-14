<?php

class ApiController extends BaseController {

	public function index()
    {
        return "API index";
    }

    public function getTracking($key)
    {
        return Package::whereTracking_code($key)->firstOrFail()->get();
    }
}
