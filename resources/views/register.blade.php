<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
  <div class="container d-flex justify-content-center pt-5 mt-5">
    <div class="card" style="width: 30rem;">
      <div class="card-header text-center">
        Please Register
      </div>
      <div class="card-body">
        <div class="container">
          <form action="daftar/create" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama lengkap</label>
              <input type="text" class="form-control" placeholder="Input nama disini" name="name" id="name"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Input email anda" name="email" id="email">
              </div>
             <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Input password anda" name="password" id="password">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
      </div>
    </div>
  </div>
  
 
            
</body>
</html>