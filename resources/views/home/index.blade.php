@extends('layouts.app')

@section('content')

    <h1 class="my-3">Welcome to home page</h1>

    @foreach(array_chunk($posts->items(), 4) as $postsChunk)

        <div class="row mb-3">
            @foreach($postsChunk as $post)
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($post->content, 100) }}
                            </p>
                            <a href="{{ route('show-full-article', [
                                                'id' => $post->id,
                                                'slug' => $post->getSlug()
                                                ]) }}" class="btn btn-primary">
                                Show full article
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endforeach

    {!! $posts->links() !!}

@endsection

