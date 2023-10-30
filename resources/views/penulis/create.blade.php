[21.09, 30/10/2023] Nanditha Nabiilah P: <h4>DATA BUKU</h4>
<br>

Judul: {{ $book->title }}
<br>
Penulis: {{ $book->author }}
<br>
Deskripsi: {{ $book->description }}

<br>
<a href="{{ route('books.index', $book->id) }}">Kembali</a>
[21.11, 30/10/2023] Nanditha Nabiilah P: <form action="{{ route('penulis.store') }}" method="POST">
    @csrf

    <div>
        Nama Penulis:
        <br>
        <input type="text" name="name" value="{{ old('name') }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <br>
        <input type="email" name="email" value="{{ old('email') }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Alamat:
        <br>
        <textarea name="address">{{ old('address') }}</textarea>

        <br>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
