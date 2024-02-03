<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register User</h1>
    <form action="{{ route('user.registerUser') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Register</button> 
    </form>
</body>
</html>