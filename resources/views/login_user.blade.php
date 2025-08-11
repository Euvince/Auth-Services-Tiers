<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implements sign in with socialities accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4 mb-3">Sign In </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Errors !</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Sign In</h3>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            @method('post')
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="User email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="password" class="form-control" placeholder="User password">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <div class="d-grid mx-auto mt-2">
                                <a href="{{ route('oauth.redirect', ['provider' => 'github']) }}" class="btn btn-dark btn-block">Sign with Github</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
