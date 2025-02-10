<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('\css/inventory_form.css') }}">
    <title>Register Inventory</title>
</head>
<body>
    <div class="env">
        <div class="box">
            <form action="{{ route('inventory.create') }}" method="POST">
                @csrf

                <div class="">
                    <label for="name" class="">Nome do Inventário</label>
                    <input type="text" class="" id="name" name="name" required>
                </div>

                <div class="">
                    <label for="category" class="">Categoria</label>
                    <select class="" id="category" name="category" aria-placeholder="Selecione a categoria" required>                                         
                        <option value="Material">Material</option>
                        <option value="Não Material">Não Material</option>
                    </select>    
                </div>

                <div class="">
                    <label for="sub_category" class="">Sub-Categoria</label>
                    <input type="text" class="" id="sub_category" name="sub_category" required>
                </div>

                <button type="submit" class="">Salvar Inventário</button>
                <a href="{{ route('show_inventory_list') }}" class="">
                    <button>Voltar para Lista</button>
                </a>
            </form>
        </div>        
    </div>    
</body>
</html>