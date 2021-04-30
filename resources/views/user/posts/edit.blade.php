@extends('layouts.admin-layout')

@section('content')

    <div class="row">

        <div class="col-md-6 col-sm-12">

            @include('partials.session-messages')


            <form action="{{ route('posts.update', ['post' => $model->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $model->title }}">

                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control">{{ $model->content }}</textarea>

                </div>

                <div class="form-group">
                    <input type="checkbox" name="is_active" value="1"
                        {{ $model->is_active ? 'checked="checked"' : '' }}>
                    <label for="is_active">Is Active?</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Add post</button>
                </div>


            </form>


        </div>

    </div>

@endsection
