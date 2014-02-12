<?php namespace Dsdev\Filters;

use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cache;
use Str;

class CacheFilter
{
    public function fetch(Route $route, Request $request)
    {
        $key = $this->generateCacheKey($request->url());
        if(Cache::has($key)) return Cache::get($key);
    }

    public function put(Route $route, Request $request, Response $response = null)
    {
        $key = $this->generateCacheKey($request->url());
        if(!Cache::has($key)) Cache::put($key, $response->getContent(), 60);
    }

    protected function generateCacheKey($url)
    {
        return "route_" . Str::slug($url);
    }
}