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
                @if ($errors->has('name'))
                    <span>
                        {{$errors->first('name')}}
                    </span>
                @endif
            </label><br>
            <label for="email">
                Email
                <input type="email" name="email">
                @if ($errors->has('email'))
                    <span>
                        {{$errors->first('email')}}
                    </span>
                @endif
            </label><br>
            <label for="password">
                Password
                <input type="password" name="password">
                @if ($errors->has('password'))
                    <span>
                        {{$errors->first('password')}}
                    </span>
                @endif
            </label>
            <br>
            <button type="submit">Kirim</button>
        </form>
    </body>
</html>
