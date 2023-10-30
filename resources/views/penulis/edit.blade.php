<form action="{{ route('penulis.update', $penulis->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        Nama Penulis:
        <input type="text" name="name" value="{{ old('name', $penulis->name) }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <input type="email" name="email" value="{{ old('email', $penulis->email) }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Alamat:
        <textarea name="address">{{ old('address', $penulis->address) }}</textarea>

        <br>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
