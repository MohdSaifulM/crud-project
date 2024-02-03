<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <table border=1>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', ['user' => $user]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>