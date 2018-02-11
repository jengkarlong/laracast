@extends ('partials.master') 

@section ('content')
<div class="col-sm-8">
    <h1>Publish a Posts</h1>

    <hr>

    <form method='POST' action='/posts'>
        {{csrf_field()}}
        

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' class="form-control" id="title" placeholder="Post Title" >
        </div>

        <div class="form-group">
            <label for="body">Content</label>
            <textarea name="body" id="body" class='form-control' ></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include ('partials.errors')
    </form>




</div>
@endsection