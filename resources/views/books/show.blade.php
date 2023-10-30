<h4>DATA BUKU</h4>
<br>

Judul: {{ $book->title }}
<br>
Penulis: {{ $book->author }}
<br>
Deskripsi: {{ $book->description }}

<br>
<a href="{{ route('books.index', $book->id) }}">Kembali</a>
