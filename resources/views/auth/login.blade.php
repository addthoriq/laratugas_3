<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="{{route('auth.login')}}" method="post">
            @csrf
            <label for="inputEmail">Email
                <input type="text" name="email" id="inputEmail">
            </label>
            <br>
            <label for="inputPass">Password
                <input type="password" name="password" id="inputPass">
            </label>
            <br>
            <button type="submit" name="button">Login</button>
        </form>
    </body>
</html>
