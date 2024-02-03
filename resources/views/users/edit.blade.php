<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit User</h1>
    <form action="" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{$user->username}}">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$user->email}}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>