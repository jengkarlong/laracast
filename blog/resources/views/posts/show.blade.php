@extends ('partials.master') 
@section ('content')

<div class="col-md-8 blog-main">

    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->body }}
    </p>

    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}:
                </strong>
                {{$comment->body}}
            </li>
            @endforeach
        </ul>
    </div>
    <!-- Input comment -->
    <hr>
    <div class="card">
        <div class="card-block">
            <form  method='POST' action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="comment" class='form-control' placeholder="Your Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class='btn btn-primary'>Add Comment</button>
                </div>
            </form>

        </div>
        @include ('partials.errors')
    </div>
</div>

@endsection