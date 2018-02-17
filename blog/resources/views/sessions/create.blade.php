@extends ('partials.master')

@section ('content')

  <div class="col-md-8">

    <h1>Sign-in</h1>

    <form action="/login" method="POST">
      @csrf

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class='btn btn-primary'>Login</button>
      </div>

      <div class="form-group">
        @include ('partials.errors')
      </div>
    </form>

  </div>

@endsection