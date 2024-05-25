@extends('partials.navbar2')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Iki</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      #home {
        background-color: rgba(255, 255, 255, 0.963);
      }
      #navbar {
        background-color: rgb(171, 4, 4);
      }
      .form-label > span {
        color: red;
      }
      #projects {
        background-color: rgba(46, 43, 43, 0.963);
      }
      #footer {
        background-color: rgb(9, 9, 9)
      }
    </style>
  </head>
  <body>  
    <!-- Awal Navbar -->
    @section('brand')
        My Portfolio
    @endsection
    <!-- Akhir Navbar -->

    @foreach ($profile as $item)    
    <!-- Home -->
    <section id="home" class="pt-5">
      <div class="container-fluid p-0">
        <div class="p-5 text-center">
          <img src="storage/{{ $item->foto }}" alt="" style="width: 200px; height: 200px;" class="rounded-circle img-thumbnail" />
          <h2 class="mt-3 fw-bold">{{ $item->nama }}</h2>
          <p class="fs-5">{{ $item->status }}</p>
        </div>
      </div>
    </section>
    <!-- Akhir Home -->

    <!-- About me -->
    <section id="about" class="pt-5">
      <div class="container">
        <div class="p-5 text-center">
          <h3 class="fw-bold mb-3">About Me</h3>
          <di class="row justify-content-center">
            <div class="col-md-4">
              <p>
                {{ $item->about }}
              </p>
            </div>
        </div>
      </div>
    </section>
    <!-- Akhir About me -->
    @endforeach

    
    <!-- My Project -->
    <section id="projects" class="pt-5">
      <div class="container">
        <div class="p-5 text-bg-light text-center">
          <h3 class="fw-bold mb-3">My Projects</h3>
          <div class="row justify-content-center">
            @foreach ($project as $item)
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="storage/{{ $item->foto_project }}" class="card-img-top" alt="Project 1" />
                <div class="card-body">
                  <p class="card-text">
                    {{ $item->deskripsi }}
                  </p>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-4 mb-3">
              <div class="card">
                <img src="storage/{{ $item->foto_project }}" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    {{ $item->deskripsi }}
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="storage/{{ $item->foto_project }}" class="card-img-top" alt="Project 2" />
                <div class="card-body">
                  <p class="card-text">
                    {{ $item->deskripsi }}
                  </p>
                </div>
              </div>
            </div> --}}
            @endforeach
        </div>
      </div>
    </section>
    <!-- Akhir Projects -->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="p-5">
          <h3 class="fw-bold text-center mb-3">Contact Me</h3>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="contact/create" method="post" id="form-contact">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                  <input type="text" class="form-control" id="text" name="nama" autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email<span>*</span></label>
                  <input type="text" class="form-control" id="email" name="email" autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan<span>*</span></label>
                  <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                  <button class="btn btn-dark" style="padding-left: 229px;padding-right: 229px">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir contact -->

    <!-- footer -->
      <footer id="footer" class="py-3 mt-3">
        <p class="text-center text-white">&copy;2023 <a href="https://instagram.com/rzzafrr?igshid=YmMyMTA2M2Y=" target="_blank" class="fw-bold text-decoration-none">Rizky Akbar</a></p>
      </footer>
    <!-- Akhir footer -->
  </body>
  <script type="text/javascript">
    var links = document.getElementsByClassName('nav-link');
    for (var i = 0; i < links.length; i++) {
      c;
      links[i].addEventListener('click', function () {
        var current = document.getElementsByClassName('active');
        if (current.length > 0) {
          current[0].className = current[0].className.replace(' active', '');
        }
        this.className += ' active';
      });
    }
  </script>
</html>
