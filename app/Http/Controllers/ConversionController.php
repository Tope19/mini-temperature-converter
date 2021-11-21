<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('conversion');
    }

    public function convertCelciustoFahrenheit(Request $request)
    {
        $celsius = $request->input('celsius');
        $fahrenheit = celsiusToFahrenheit($celsius);
        return view('conversion', ['fahrenheit' => $fahrenheit]);
    }

    public function convertFahrenheittoCelsius(Request $request)
    {
        $fahrenheit = $request->input('fahrenheit');
        $celsius = fahrenheitToCelsius($fahrenheit);
        return view('conversion', ['celsius' => $celsius]);
    }
}
