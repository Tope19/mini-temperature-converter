<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Temperature Converter</h1>
                <form action="{{ route('convert') }}" method="post">@csrf
                    <div class="form-group">
                        <label for="temp">Temperature</label>
                        <input type="text" class="form-control" required name="temp" id="temp" placeholder="Enter Temperature">
                    </div>
                    <div class="form-group">
                        <label for="temp_type">Temperature Type</label>
                        <select class="form-control" required name="temp_type" id="temp_type">
                            <option disabled selected>Select Temperature Type</option>
                            <option value="celsius">Celsius to Fahrenheit</option>
                            <option value="fahrenheit">Fahrenheit to Celsius</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Convert</button>
                </form>
                <br />
                @if (!empty($fahrenheit))

                    <p>Value: {{ $fahrenheit }}°F</p>

                @endif
                @if (!empty($celsius))

                  <p>Value:{{ $celsius }}°C</p>

                @endif

            </div>
        </div>
    </div>
</body>
</html>
