@extends('dashboard')

@section('content')
    <main class="login-form">
<<<<<<< HEAD
        <div class="cotainer">
=======
        <div class="container">
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
=======
                                        <!--Login with gg-->
                                    <a title="Login with Google" href="{{route('auth.redirection','google') }}" class=" text-center  ">Login with Google</a>
                                </div>
                                <div class="d-grid mx-auto">
                                        <!--Login with facebook-->
                                    <a title="Login with Facebook" href="{{route('auth.redirection','facebook') }}" class=" text-center  ">Login with Facebook</a>
                                    <button type="submit" class="btn btn-dark btn-block">Sign in</button>
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
