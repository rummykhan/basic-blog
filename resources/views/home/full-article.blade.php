@extends('layouts.app')

@section('content')

    <h1 class="my-3">{{ $model->title }}</h1>

    <p class="text-justify">
        {!! $model->content !!}
    </p>

    <div class="row mt-5">
        <div class="col-12 text-right">
            Authored by <b>{{ $model->user->name }}</b> at {{ $model->created_at }}
        </div>
    </div>

@endsection

