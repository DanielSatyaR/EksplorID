<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics</title>
</head>
<body>
    <h1>Analytics</h1>
    <p>Total Users: {{ $data['total_users'] }}</p>
    <p>Total Items: {{ $data['total_items'] }}</p>
</body>
</html>

// File: resources/views/admin/users.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user['name'] }} - {{ $user['email'] }}</li>
        @endforeach
    </ul>
</body>
</html>