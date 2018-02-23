@extends ('layouts.master')

@section ('page_title') Events | Northland Sports Bar &amp; Grill @endsection

@section ('add_head')
  <link rel="stylesheet" href="/css/event.css">

@endsection

@section ('content')

  <h1 id="page-title"><i class="fas fa-star"> </i> Events <i class="fas fa-star"> </i> </h1>

  <section id="events">
    @foreach ($events as $event)
    <article class="item">
      <h2>{{$event->title}}</h2>
      <p>{{$event->body}}</p>
      <span class="date">{{date("D F d", strtotime($event->event_date))}}</span>
      <span class="time">at {{date("h A", strtotime($event->event_time))}}</span>
    </article>

    @endforeach
  </section>


@endsection