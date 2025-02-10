<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inventários</title>
    <link rel="stylesheet" href="{{ asset("\css/inventory_list.css") }}">
</head>
<body>
    <div>
        <div>
            <h2>Inventários Cadastrados</h2>
            <a href="{{ route('show_inventory_form') }}">
                <button>Novo Inventário</button>
            </a>
        </div>

        <!-- Formulário de Filtro -->
        <div>
            <div>
                <form action="{{ route('show_inventory_list') }}" method="GET">
                    <div>
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" value="{{ request('name') }}">
                    </div>

                    <div>
                        <label for="category">Categoria</label>
                        <input type="text" id="category" name="category" value="{{ request('category') }}">
                    </div>

                    <div>
                        <label for="location">Localização</label>
                        <input type="text" id="location" name="location" value="{{ request('location') }}">
                    </div>

                    <div>
                        <button type="submit">Filtrar</button>
                        <a href="{{ route('show_inventory_list') }}">
                            <button>Limpar Filtros</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabela de Inventários -->
        <div>
            <div>
                @if ($inventories->isEmpty())
                    <p>Nenhum inventário encontrado.</p>
                @else
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Sub-Categoria</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>{{ $inventory->category }}</td>
                                    <td>{{ $inventory->sub_category }}</td>
                                    <td>
                                        <a href="#">Editar</a>
                                        <form action="{{ route('inventory.delete', $inventory->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
