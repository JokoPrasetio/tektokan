@extends('content.auth')
@section('content_auth')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow border-secondary ">
                    <div class="card-header text-center">
                        <h5 class="fw-600">Tektokan <i class="fa-brands fa-rocketchat"></i> </h5>
                    </div>
                    <div class="card-body p-4">
                        @include('content.alert')
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="button">
                                <button class="btn btn-success mt-3 me-3" type="submit">Login</button>
                                <a class="btn btn-outline-success mt-3" href="/register">Create Acount</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center mb-3">
                        <p class="mt-2"><strong>Or</strong> login with</p>
                        <a href="#">
                            <i class="fa-brands fa-square-facebook fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
