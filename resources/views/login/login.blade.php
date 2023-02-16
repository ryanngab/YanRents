@extends('layouts.main1')
@section('container')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    @if (session('loginError'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('loginError') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in</p>
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control mt-2" id="email"
                                                placeholder="name@example.com" autofocus>
                                            <label for="email">email</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control mt-2" id="password"
                                                placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">Login</button>
                                    </form>
                                    <small class="align-item-center">belum punya akun?<a href="/register" class="text-decoration-none">Register</a></small>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://img.freepik.com/free-vector/welcome-word-flat-cartoon-people-characters_81522-4207.jpg?size=626&ext=jpg&ga=GA1.2.816235923.1668582130&semt=sph"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
