@extends ('layouts.master')

@section ('content')

<h1 id="page-title">Post New Event</h1>

  <form action="/event" method="POST" style="width: 500px">
    @csrf
    <div class="field">
      <label class="label" for="title">Event Title: </label>
      <div class="control">
     
      @if ($e = $errors->first('title')) 
        <input class="input is-danger" type="text" name="title" id="title">
        </div>
        <div class="help is-danger">{{$e}}</div>
      @else
       <input class="input is-info" type="text" name="title" id="title">
      </div>
      @endif
    </div>
    <div class="field">
      <label class="label" for="body">Event Description:</label>
      <div class="control">
        @if ($e = $errors->first('body')) 
          <input class="input is-danger" type="text" name="body" id="body">
          </div>
          <div class="help is-danger">{{$e}}</div>
        @else
         <input class="input is-info" type="text" name="body" id="body">
        </div>
        @endif
    </div>
    <div class="field">
      <label class="label" for="event_date">Event Date:</label>
      <div class="control">
      <input class="input is-info" type="date" name="event_date" id="date">
      </div>
    </div>
    
      <label class="label" for="event_time">Event Time</label>
      <div class="control">
      <input class="input is-info" type="time" name="event_time" id="time">
      </div>
      <div class="control">
        <button type="submit" class="button is-info">Button</button>
      </div>
      
    </div>
  </form>
  <!-- @include ('layouts.errors') -->
@endsection
