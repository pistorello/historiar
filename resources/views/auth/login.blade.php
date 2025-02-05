<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('\css/login.css') }}">
</head>
<body>
  <div class="env"> 
    <form method="POST" action="{{ route('login') }}">
      <div class="login-box">
        <h1>Login</h1>   
        @csrf
        <div>
          <label for="email">Email</label>
          <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        </div>
    
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
    
        <div>
          @error('email')
            <div>{{ $message }}</div>        
          @enderror
        </div>
    
        <button type="submit">Login</button>
        <a href="{{ route('show_register_form') }}">
          <button type="button">Register</button>
        </a>
      </div>
    </form>
  </div>
</body>
</html>