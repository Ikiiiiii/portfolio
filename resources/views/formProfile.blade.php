@extends('partials.navbar1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio | Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @section('brand')
        Edit Profile
    @endsection
    <div class="container">
        <form style="margin-top: 6%" action="profile/update/{{$profile->id}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input class="form-control" placeholder="Masukkan Nama" type="text" name="nama" id="nama" value="{{ $profile->nama }}"></td>
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Alamat</label> 
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{ $profile->alamat }}</textarea>
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Jenis Kelamin</label>
                        <select name="jk" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                          @if ($profile->jk == 'Laki-laki')
                          <option selected">Laki-laki</option>
                          @else
                          <option selected">Perempuan</option>
                          @endif
                        </select>
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat" id="tempat" value="{{ $profile->tempat }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal" id="tempat" value="{{ $profile->tanggal }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Status</label> 
                    <input type="text" class="form-control" placeholder="Status nya apa kak" name="status" id="stat" value="{{ $profile->status }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Foto Profile</label> 
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Akun Instagram</label>
                    <input class="form-control" placeholder="Masukkan Akun Instagram" name="ig" id="ig" type="text" value="{{ $profile->ig }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">Akun Facebook</label>
                    <input class="form-control" placeholder="Masukkan Akun Facebook" type="text" name="fb" id="fb" value="{{ $profile->fb }}">
                </div>
                <div class="mt-3 mb-2">
                    <label for="" class="form-label">About</label>
                    <textarea class="form-control" name="about" id="about" cols="30" rows="5">{{ $profile->about }}</textarea>
                </div>
                <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-dark" type="submit" value="Submit">
                </div>
        </form>
    </div>
</body>
</html>