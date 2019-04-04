<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User</title>
    </head>
    <body>

        {{auth()->check()}}
        {{auth()->user()->name}}
        <h1>
        User Table
        </h1>

        <a href="{{route('users.create')}}">Tambah</a>
        <a href="{{ route('auth.logout') }}">Log Out</a>

        <table>
                <tr>
                    <td>Status</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Terdaftar pada</td>
                    <td>Jumlah Artikel</td>
                    <td>Aksi</td>
                </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td style="text-align:center">{{$user->article()->count()}}</td>
                    <td>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                        <a href="{{route('users.edit', $user->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
