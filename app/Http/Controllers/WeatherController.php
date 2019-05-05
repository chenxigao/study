<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Overtrue\Weather\Weather;

class WeatherController extends Controller
{
    public function show(Request $request, $city)
    {
        // 这里的 $this 有getWeather 方法？？？
        //$w = new Weather(env('WEATHER_API_KEY'));
        // Weather $weather 相当于 $weather = new Weather(); 你根本就没传key 为什么不报错呢？
         return app('weather')->getWeather($city);

//        dd($this->app());
//        $weather = new Weather(env('WEATHER_API_KEY'));
//
//        return $weather->getWeather($city, 'all', 'xml');

    }
    
}
