@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<a href="/employe/create">Tambah Data Pegawai</a>
<a href="/employe/edit/{{$row->id}}"><button>Edit</button></a>
<br><br>

<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
    @foreach ($employes as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->gaji }}</td>
        <td>
            <button>Edit</button> | <button>Delete</button>
        </td>
    </tr>
    @endforeach
</table>
@endsection