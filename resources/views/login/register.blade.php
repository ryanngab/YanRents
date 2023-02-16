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
                                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                        <form action="/register" method="post">
                                            @csrf
                                            <div class="form-floating">
                                            <input type="text" name="name" class="form-control mt-2" id="name"
                                                placeholder="nama" autofocus>
                                            <label for="Nama">Nama</label>
                                        </div>

                                        <div class="form-floating">
                                            <input type="number" name="no_hp" class="form-control mt-2" id="no_hp"
                                                placeholder="No_hp" autofocus>
                                            <label for="no_hp">Nomor Hp</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control mt-2" id="email"
                                                placeholder="email">
                                            <label for="email">Email</label>
                                        </div>

                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control mt-2" id="password"
                                                placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                            <button type="submit" class="btn btn-primary mt-2">Register</button>
                                        </form>
                                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
                                 </div>
                                 <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://img.freepik.com/free-vector/forms-concept-illustration_114360-4797.jpg?w=1060&t=st=1675751187~exp=1675751787~hmac=38d18b005360b32edbe5635f380d21a9b0d09270788893325f698fa3d569a74c" class="img-fluid"
                                        alt="Sample image">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
