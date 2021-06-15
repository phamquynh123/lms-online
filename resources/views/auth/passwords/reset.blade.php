<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="icon" href="../../images/favicon.ico"> --}}

    <title> welcomee </title>
  
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/bootstrap.min.css') }}">
    
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/bootstrap-extend.css') }}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/master_style.css') }}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/_all-skins.css') }}">
    {{-- link font-awsome --}}
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/font-awesome/css/font-awesome.min.css') }}">
</head>
<body class="hold-transition bg-img" style="background-image: url(../../images/gallery/full/6.jpg)" data-overlay="4">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100">
                            <h2>{{ trans('message.Getstarted') }} <br> {{ trans('withUs') }}</h2>
                            <p class="text-white">{{ trans('Reset Password') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom h-p100">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach (json_decode(session('error')) as $error)
                                        <li>{{ $error[0] }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('put-resetpass', $token) }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                             {{--    <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


                     <!-- jQuery 3 -->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/jquery-3.3.1.js') }}"></script>
    
    <!-- popper -->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/popper.min.js') }}"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/bootstrap.min.js') }}"></script>

</body>
</html>
