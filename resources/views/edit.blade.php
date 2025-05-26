<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('put')
            <label for="title">Ingrese el título del libro
                <input type="text" name="titulo" id="title"
                value="{{$book->title}}">
            </label>
            <label for="price">Ingrese el precio del libro
                <input type="number" name="precio" id="price"
                    value="{{$book->price}}"
                >
            </label>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
