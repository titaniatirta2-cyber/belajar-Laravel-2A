@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>

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
        <td>{{$row->id}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->gender}}</td>
        <td>{{$row->gaji}}</td>
        <td>
            <button>Edit</button> | <button>Delete</button>
        </td>
    </tr>
    @endforeach
</table>

<br>

<form method="post" action="/employe/store">
    @csrf
    <table border="0" align="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2"></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endsection