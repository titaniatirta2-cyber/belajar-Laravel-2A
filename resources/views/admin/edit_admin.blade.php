<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h1 class="h4 mb-4">{{ $judul }}</h1>

                    <form method="POST" action="/admin/{{ $admin->id_admin }}/update">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">ID Admin</label>
                            <input type="number" name="id_admin" value="{{ $admin->id_admin }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="{{ $admin->username }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password (kosongkan jika tidak diubah)</label>
                            <input type="text" name="password" placeholder="Masukkan password baru" class="form-control">
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                            <a href="/admin" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>