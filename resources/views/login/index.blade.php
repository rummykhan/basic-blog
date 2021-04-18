@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">

            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">

                    <form action="/login" method="POST">
                        @csrf

                        @include('partials.session-messages')

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <a href="{{ route('user-register') }}" class="my-3">Register if you're not a user</a>


                        <div class="form-group mt-3">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
