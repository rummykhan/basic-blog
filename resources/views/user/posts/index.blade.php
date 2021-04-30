@extends('layouts.admin-layout')

@section('content')

    @include('partials.session-messages')

    <div class="row mt-3">
        <div class="col-12">

            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus"></i> Add Post
            </a>

        </div>
    </div>


    <table class="table table-striped table-bordered mt-3">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Active?</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                    {{ $post->title }}
                    </a>
                </td>
                <td>{{ \Illuminate\Support\Str::limit($post->content, 30) }}</td>
                <td>{!! $post->is_active ? '<i class="bi bi-check-circle-fill text-success"></i>' : '<i class="bi bi-x-circle-fill danger"></i>' !!}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $posts->links() !!}
@endsection
