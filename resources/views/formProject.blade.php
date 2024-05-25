@extends('partials.navbar1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio | Add Project</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
   @section('brand')
       Add Project
   @endsection
   <div class="container">
       <form style="margin-top: 6%" action="{{ $action }}" method="POST" enctype="multipart/form-data">
         @csrf
           <table>
               <div class="mt-3 mb-2">
                   <label for="" class="form-label">Judul Project</label>
                   <input class="form-control" type="text" placeholder="Masukkan Judul Project" name="judul" id="judul" 
                   value="{{ $project->judul }}">
               </div>
               <div class="mt-3 mb-2">
                   <label for="" class="form-label">Kategori</label>
                   <select name="kategori" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option>Pilih Kategori</option>
                    <option value="Portrait">Portrait</option>
                    <option value="Landscape">Landscape</option>
                  </select>
               </div>
               <div class="mt-3 mb-2">
                   <label for="" class="form-label">Foto Project</label>
                   <input class="form-control" type="file" name="foto_project" id="foto_project">
               </div>
               <div class="mt-3 mb-2">
                   <label for="" class="form-label">Deskripsi Project</label>
                   <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5">{{ $project->deskripsi }}</textarea>
               </div>
               <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
                <input class="btn btn-dark" type="submit" value="Submit">
            </div>
           </table>
       </form>
   </div>
</body>
</html>