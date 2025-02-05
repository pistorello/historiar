<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link rel="stylesheet" href="{{ asset('\css/welcome.css') }}">
    </head>
        <div class="env">
            <div class="box-welcome">
                <h1>Welcome!</h1>
                
                <div>
                    <a href="{{ route('show_login_form') }}">
                        <button type="button">Login</button>
                    </a>
    
                    <a href="{{ route('show_register_form') }}">                
                        <button type="button">Register</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
