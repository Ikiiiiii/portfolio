@extends('partials.navbar1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Com  patible" content="ie=edge">
    <title>My Portfolio | Project</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@section('brand')
    Project
@endsection
    <div style="margin-top: 6%" class="container">
        <a href="{{ url('project/add') }}"><button class="btn btn-primary btn-sm mb-2">Tambah Data</button></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Project</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>    
            <tbody>
                @foreach ($project as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>
                            <img src="/storage/{{ $item->foto_project }}" alt="" width="100" height="100">
                        </td>
                        <td>{{ $item->deskripsi }}</td>
                        <td class="d-flex justify-content-center mr-2">
                            <a href="project/edit/{{ $item -> id }}"><button class="btn btn-success btn-sm">Edit</button></a>
                            <a href="project/delete/{{ $item -> id }}"><button class="btn btn-danger btn-sm">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>              
</body>