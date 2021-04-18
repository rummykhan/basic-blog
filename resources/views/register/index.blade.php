@extends('layouts.guest-layout')

@section('content')



    <div class="card">
        <div class="card-header">
            Register page
        </div>
        <div class="card-body">

            <form action="/register" method="POST">
                @csrf


                @include('partials.session-messages')

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="">
                </div>

                <div class="form-group">

                    <div class="block">If you're already registered you can goto <a href="{{ route('user-login') }}">Login page</a></div>

                    <input type="submit" value="Register" class="btn btn-primary btn-block">
                </div>

            </form>

        </div>
    </div>


@endsection
