<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">
                Please Login
              </div>
              <div class="card-body">
                <div class="container">
                    <form action="/auth" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="mt-3 mb-3 text-center">
                            Belum punya akun ? <a href="/register" class="text-decoration-none">Register Here</a>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</body>
</html>