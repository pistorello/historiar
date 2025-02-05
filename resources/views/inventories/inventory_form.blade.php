<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inventory_form.css') }}">
    <title>Register Inventory</title>
</head>
<body>
    <div class="env">
        <div class="box">
            <form method="POST" action="{{ route('create') }}">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    @error('name')
                      <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category">
                    @error('category')
                      <div>{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit">Salvar</button>
            </form>
        </div>        
    </div>    
</body>
</html>