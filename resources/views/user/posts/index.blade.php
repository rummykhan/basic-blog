@extends('layouts.admin-layout')

@section('content')

    <table class="table table-striped table-bordered">
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
                <td>{{ $post->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($post->content, 30) }}</td>
                <td>{!! $post->is_active ? '<i class="bi bi-check-circle-fill text-success"></i>' : '<i class="bi bi-x-circle-fill danger"></i>' !!}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
