@extends('partials.navbar1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio | Contact</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@section('brand')
    Contact
@endsection
    <div style="margin-top: 6%" class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->pesan }}</td>
                        <td class="d-flex justify-content-center mr-2">
                            <a href="contact/delete/{{ $item -> id }}"><button class="btn btn-danger btn-sm">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>