@extends('layouts.admin-layout')

@section('content')

    <div class="row">

        <div class="col-md-6 col-sm-12">


            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">

                    @error('title')
                    <label class="help-block text-danger">{{ $message }}</label>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control"></textarea>

                    @error('content')
                    <label class="help-block text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="checkbox" name="is_active" value="1">
                    <label for="is_active">Is Active?</label>

                    @error('is_active')
                    <label class="help-block text-danger">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Add post</button>
                </div>


            </form>


        </div>

    </div>

@endsection
