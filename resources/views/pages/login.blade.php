<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
</head>
<body class="bg-steel-blue" >
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center" style="width:90vw; max-width: 1200px;">
        <div class="col-md-6">
            <div class="card shadow border-midnight-blue">
                <div class="card-header bg-midnight-blue light-blue text-center fs-4">
                    Login
                </div>
                <div class="card-body">
                    <form action="{{route('login.process')}}" method="POST">
                        @csrf
                        <div class="form-group my-2">
                            <label for="email"><i class="bi bi-envelope"></i> Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="user@gmail.com" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="password"><i class="bi bi-lock"></i> Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                        </div>
                        @error('login_failed')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="dc-none bg-midnight-blue light-blue mt-3 p-2 w-100 rounded-5">Login</button>
                        <a href="/homepage" class="d-block text-center dc-none border-midnight-blue midnight-blue mt-2 p-2 w-100 rounded-5">Kembali</a>
                        <div class="text-center mt-2">
                            <p class="text-center">Belum punya akun? <a href="/register">register disini!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>