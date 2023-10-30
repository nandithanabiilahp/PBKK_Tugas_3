<h3>DAFTAR PENULIS</h3>

@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif

@foreach ($penulis as $penulis)
    <div>
        Nama : {{ $penulis->name }}
        <br>
        Email: {{ $penulis->email }}
        <br>
        Alamat: {{ $penulis->address }}
        <br>
        <a href="{{ route('penulis.show', $penulis->id) }}">Lihat</a>
        <a href="{{ route('penulis.edit', $penulis->id) }}">Edit</a>

        <form action="{{ route('penulis.destroy', $penulis->id) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Hapus">
        </form>
    </div>

    <hr>
@endforeach
