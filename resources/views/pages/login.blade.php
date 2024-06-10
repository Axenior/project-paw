<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" 
    rel="stylesheet" integrity="sha512-yT4g0h6IQbnpIdh8TmbWnHkhYbA5BG4G/qDJ2Zz44R4hwj5fBrB/UcU73gzQ6AU+g5w9Q1w9oOCjoAKIoeUVxw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center" style="width: 1200px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center fs-4">
                    <i class="bi bi-person-fill"></i> Login
                </div>
                <div class="card-body">
                    <form action="{{route('login.process')}}" method="POST">
                        @csrf
                        <div class="form-group my-3">
                            <label for="email"><i class="bi bi-person"></i>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="password"><i class="bi bi-lock"></i> Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary mt-4 w-45"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
                            <a href="/register" class="btn btn-secondary mt-4 w-45"><i class="bi bi-pencil-square"></i> Register</a>
                        </div>
                        <button type="button" class="btn btn-outline-secondary mt-4 w-100" onclick="history.back()"><i class="bi bi-arrow-left"></i> Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6sn0uoP6Idqi/tD6M2nWVbb0M4i1" 
  crossorigin="anonymous"></script>
</body>
</html>
