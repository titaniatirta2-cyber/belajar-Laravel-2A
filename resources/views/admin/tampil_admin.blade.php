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
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 mb-0">{{ $judul }}</h1>
                <a href="/admin/create" class="btn btn-success">+ Tambah Admin</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-success">
                        <tr>
                            <th>ID Admin</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $row)
                        <tr>
                            <td>{{ $row->id_admin }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->password }}</td>
                            <td>
                                <a href="/admin/{{ $row->id_admin }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/{{ $row->id_admin }}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data admin ini?')">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-muted py-4">Belum ada data admin.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>