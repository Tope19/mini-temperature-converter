<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('conversion');
    }


    public function convert(Request $request)
    {

        if($request->input('temp_type') == 'celsius'){
            $celsius = $request->input('temp');
            $fahrenheit = celsiusToFahrenheit($celsius);

            return view("conversion",compact('fahrenheit'));
        }

        else if($request->input('temp_type') == 'fahrenheit'){
            $fahrenheit = $request->input('temp');
            $celsius = fahrenheitToCelsius($fahrenheit);
            return view("conversion",compact('celsius'));

        }

    }

}
