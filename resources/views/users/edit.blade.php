<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <h1>Create User</h1>
        <form action="{{route('users.update', $user->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="nama">
                Nama
                <input type="text" name="name" value="{{$user->name}}">
            </label><br>
            <label for="email">
                Email
                <input type="email" name="email" value="{{$user->email}}">
            </label><br>
            <label for="password">
                Password
                <input type="password" name="password">
            </label>
            <br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>
