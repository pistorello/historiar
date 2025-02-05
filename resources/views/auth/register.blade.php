<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="{{ asset('\css/register.css') }}">
</head>
<body>
  @if (session('success'))
    <div>{{ session('success') }}</div>
  @endif

  @if (session('error'))
    <div>{{ session('error') }}</div>
  @endif

  <h1>Register</h1>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="{{ old('username') }}" required>
      @error('username')
        <div>{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required>
      @error('email')
        <div>{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      @error('password')
        <div>{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <button type="submit">Register</button>
  </form>
</body>
</html>
