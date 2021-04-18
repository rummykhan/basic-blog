@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">

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
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
