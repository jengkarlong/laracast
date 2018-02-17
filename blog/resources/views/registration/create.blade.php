@extends ('partials.master')

@section ('content')


  <div class="col-sm-8">

    <h1>Register</h1>

    <form action="/register" method="POST">

      @csrf

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      <div class="form-group">
        @include ('partials.errors');

      </div>
    </form>

  </div>


@endsection