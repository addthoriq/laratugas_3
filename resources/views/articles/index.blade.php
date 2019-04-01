<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Article</title>
    </head>
    <body>

        <h1>
        Article Table
        </h1>

        {{-- <a href="{{route('articles.create')}}">Tambah</a> --}}

        <table>
                <tr>
                    <td>Author</td>
                    <td>Judul</td>
                    <td>Kategori</td>
                    <td>Dibuat pada</td>
                    <td>Aksi</td>
                </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>{{$article->user->name}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->category->name}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>
                        {{-- <form action="{{route('articles.destroy',$article->id)}}" method="post">
                        <a href="{{route('articles.edit', $article->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
