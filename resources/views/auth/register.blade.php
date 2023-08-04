@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col-4"></div>
        <div class="card p-4 col-4">
            <h4>Register a New Account</h4>
            <form method="POST" action="#">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirm" placeholder="Retype Password">
                </div>

                <button type="submit" class="btn btn-primary">REGISTER</button>
            </form>
        </div>
    </div>
@endsection
