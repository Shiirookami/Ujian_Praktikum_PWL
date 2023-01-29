<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    <link rel="stylesheet" href="{{('')}}admin/vendor/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{('')}}admin/assets/css/style.css">
    <!-- <link rel="stylesheet" href="{{('')}}admin/vendor/themify-icons/themify-icons.css"> -->
    <link rel="stylesheet" href="{{('')}}admin/assets/css/bootstrap-override.css">


</head>

<body>
<section class="container h-100">
    <div class="row justify-content-sm-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h1 class="fs-4 text-center fw-bold mb-4">Register</h1>
                    <h1 class="fs-6 mb-3">Register to get more benefits!!</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">{{ __('name')}}</label>
                            <div class="input-group input-group-join mb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="input-group-text rounded-end">&nbsp<i
                                    class="fa fa-envelope"></i>&nbsp</span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">{{ __('Email Address')}}</label>
                            <div class="input-group input-group-join mb-3">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="input-group-text rounded-end">&nbsp<i
                                    class="fa fa-user"></i>&nbsp</span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">{{ __('Password')}}</label>
                            <div class="input-group input-group-join mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                    class="fa fa-eye"></i>&nbsp</span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">{{ __('Confirm Password')}}</label>
                            <div class="input-group input-group-join mb-3">
                                <input id="password_confirmation" type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="new-password" autofocus>
                                <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                    class="fa fa-eye"></i>&nbsp</span>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">I agree to <a
                                        href="#">terms</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary ms-auto">
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="text-center mb-2 mt-3">&mdash; OR &mdash;</div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary icon-left" type="button"><i class="fab fa-facebook"></i>
                            Sign up using Facebook</button>
                        <button class="btn btn-danger icon-left" type="button"><i class="fab fa-google"></i>
                            Sign up using Google</button>
                    </div>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Already have an account? <a href="{{route('login')}}" class="text-dark">Login instead</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-muted">
                Copyright &copy; 2022 &mdash; Mulai Dari Null
            </div>
        </div>
    </div>
</section>
<script src="{{('')}}admin/assets/js/login.js"></script>
</body>
</html>
