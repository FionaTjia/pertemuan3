@extends('template.mastertemplate')

@section('title', 'List Profil Mahasiswa')
    
@section('content')
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

    <h1>List Profil Mahasiswa</h1>
    <table>
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        @foreach ($mhs as $detailMhs)
        <tr> 
            <td>{{ $detailMhs['nama'] }}</td> 
            <td>{{ $detailMhs['jurusan'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection