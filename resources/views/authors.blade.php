<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Agregar Autor</h1>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del autor</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email del autor</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="birth_day" class="form-label">Fecha de nacimiento</label>
                <input type="date" name="birth_day" id="birth_day" class="form-control" value="{{ old('birth_day') }}">
                @error('birth_day')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>

        <br>

        <h2>Lista de Autores</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->birth_day }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="post" style="display:inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este autor?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
