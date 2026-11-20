<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Student</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8faf8; color: #1f2933; margin: 0; }
        .wrap { max-width: 560px; margin: 30px auto; background: #fff; border: 1px solid #d1dfd5; border-radius: 12px; padding: 24px; }
        .field { margin-bottom: 14px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; font-size: 14px; }
        input { width: 100%; padding: 9px; border: 1px solid #cbd5e1; border-radius: 8px; box-sizing: border-box; }
        button { padding: 10px 16px; background: #3b7a57; color: #fff; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; }
        .alert-err { background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 8px; margin-bottom: 14px; }
    </style>
</head>
<body>
    <div class="wrap">
        <h2>Tambah Student</h2>

        @if ($errors->any())
            <div class="alert-err">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/students">
            @csrf
            <div class="field">
                <label>NIM</label>
                <input type="text" name="nim" value="{{ old('nim') }}" required>
            </div>
            <div class="field">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" required>
            </div>
            <div class="field">
                <label>Prodi</label>
                <input type="text" name="prodi" value="{{ old('prodi') }}" required>
            </div>
            <div class="field">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="field">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat') }}">
            </div>
            <button type="submit">Simpan</button>
            <a href="/students" style="margin-left:10px;">Kembali</a>
        </form>
    </div>
</body>
</html>