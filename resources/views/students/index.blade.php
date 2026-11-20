<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Student</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8faf8; color: #1f2933; margin: 0; }
        .wrap { max-width: 980px; margin: 30px auto; padding: 0 20px; }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
        .btn { display: inline-block; padding: 8px 14px; border-radius: 8px; text-decoration: none; font-size: 14px; font-weight: bold; border: none; cursor: pointer; }
        .btn-add { background: #3b7a57; color: #fff; }
        .btn-edit { background: #e2ece6; color: #1f2933; }
        .btn-del { background: #fee2e2; color: #991b1b; }
        .alert-ok { background: #dcfce7; color: #166534; padding: 10px 14px; border-radius: 8px; margin-bottom: 16px; }
        table { width: 100%; border-collapse: collapse; background: #fff; border: 1px solid #d1dfd5; }
        th, td { padding: 10px 12px; border: 1px solid #d1dfd5; text-align: left; font-size: 14px; }
        th { background: #edf4ef; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="top">
            <h2>Data Student</h2>
            <div>
                <a href="/dashboard" class="btn btn-edit">Dashboard</a>
                <a href="/students/create" class="btn btn-add">+ Tambah Student</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-del">Logout</button>
                </form>
            </div>
        </div>

        @if (session('success'))
            <div class="alert-ok">{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $i => $student)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->prodi }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->alamat ?? '-' }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}/edit" class="btn btn-edit">Edit</a>
                            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus data student ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-del">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Belum ada data student.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>