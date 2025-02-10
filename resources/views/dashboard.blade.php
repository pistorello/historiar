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
      <h3>Total Inventories:</h3>
      <h2>{{ count($inventories) }}</h2>
    </div>

    <div>
      <h3>Quick Access</h3>
      <a href="{{ route('show_inventory_form') }}">
        <button>Add Inventory   </button>
      </a>
      <a href="{{ route('show_inventory_list') }}">
        <button>Search Inventory</button>
      </a>
    </div>

  </div>
</body>
</html>