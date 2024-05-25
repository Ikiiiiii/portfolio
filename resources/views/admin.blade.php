@extends('partials.navbar1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@section('brand')
    Admin

    @endsection
    <div style="margin-top: 5%" class="container">
        <h1 class="text-center">Welcome {{ Auth::user()->name }} </h1>
    </div>
</body>