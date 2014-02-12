<?php

App::missing(function($exception) {
    return Response::view('errors.missing', array(), 404);
});