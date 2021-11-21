<?php
    // Function to convert celsius to fahrenheit
    function celsiusToFahrenheit($celsius) {
        $fahrenheit = ($celsius * 9/5   ) + 32;
        return $fahrenheit;
    }

    // Function to convert fahrenheit to celsius
    function fahrenheitToCelsius($fahrenheit) {
        $celsius = ($fahrenheit - 32) * 5/9;
        return $celsius;
    }
