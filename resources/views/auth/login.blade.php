<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Login</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" placeholder="Username" name="username" required>
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" placeholder="Enter your Password" required>
                                    <button class="btn bg-white text-muted">
                                        <span class="far fa-eye-slash"></span>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger m-4">
                                <div class="text-danger">
                                    <strong>Error:</strong> Invalid username or password.
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

</body>

</html>
