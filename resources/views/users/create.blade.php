<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <h1>Create User</h1>
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <label for="nama">
                Nama
                <input type="text" name="name">
            </label><br>
            <label for="email">
                Email
                <input type="email" name="email">
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
