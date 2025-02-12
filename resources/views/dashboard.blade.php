<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('\css/dashboard.css') }}">
</head>
<body>
  <div class="env">
    <h1>Dashboard</h1> 

    <div class="card">
      <div class="tab-content">  
        <div id="tab-total-inventory">
          <h3>Total Inventories:</h3>
          <h2>{{ count($inventories) }}</h2>
        </div>  

        <div id="tab-total-users" style="display: none">
          <h3>Total Users:</h3>
          <h2>{{ count($users) }}</h2>
        </div>
      </div>
      <div class="tab-dots">
        <span class="dot active" onclick="switch_tab(1)"></span> 
        <span class="dot" onclick="switch_tab(2)"/>
      </div>
    </div>

    <div class="card recent">
      <div class="tab-content">  
        <div id="tab-recent-inventory">
          <h3>Recent Inventories:</h3>
          <div class="recent-items">
            @if (count($recent_inventories) > 0)
              <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Adicionado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent_inventories as $inventory)
                        <tr>
                            <td>{{ $inventory->name }}</td>
                            <td>{{ $inventory->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>              
            @else
              <p>Nenhum inventário encontrado.</p>           
            @endif
          </div>
        </div>  

        <div id="tab-recent-users" style="display: none">
          <h3>Recent Users:</h3>
          <div class="recent-items">

          </div>
        </div>
      </div>
      <div class="tab-dots">
        <span class="dot active" onclick="switch_tab(1)"></span> 
        <span class="dot" onclick="switch_tab(2)"/>
      </div>
    </div>
  </div>
</body>
</html>