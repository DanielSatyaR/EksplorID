<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #343a40;
            padding: 1rem;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 1rem;
        }
        .container {
            padding: 2rem;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
        <div>
            <a href="{{ route('admin.analytics') }}">Analytics</a>
            <a href="{{ route('admin.users') }}">Users</a>
            <a href="{{ route('admin.items') }}">Items</a>
            <a href="/logout">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h2>Welcome, Admin!</h2>
            <p>Manage your application from this dashboard.</p>
        </div>
    </div>
</body>
</html>