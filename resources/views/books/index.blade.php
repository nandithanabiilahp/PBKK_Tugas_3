<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <!-- Sertakan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h3>DAFTAR BUKU</h3>

        @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
            <br>
        @endif

        @foreach ($books as $book)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Judul: {{ $book->title }}</h5>
                    <p class="card-text">Penulis: {{ $book->author }}</p>
                    <p class="card-text">Deskripsi: {{ $book->description }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Lihat</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('books.create', $book->id) }}" class="btn btn-success">Tambah</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
