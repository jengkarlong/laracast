@extends ('layouts.master')

@section ('add_head')
  <link rel="stylesheet" type='text/css' href="css/home.css"> 
@endsection

@section ('page_title') Northland Sport's Bar &amp; Grill @endsection

@section ('content')
  @include ('layouts.header')
 
  <section id="upcoming" class='clear'>
    <h2 class='wow bounceInLeft'>
      <span class="icon"><i class="fa fa-football-ball"> </i> </span>
      Upcoming Events 
      <span class="icon"><i class="fa fa-football-ball"> </i> </span>
      <br>
      <span class='at-nland'>
        at Northland Sport's Bar and Grill
      </span>
    </h2>
    <div class="event-container">
      <article class="event-item" style='background-image: url("/img/event.jpeg")'>
        <a href="#">
          <div class="event-content">
            <h3>Event Title</h3>
            <p>Mon 10 Feb</p>
          </div>
        </a>
      </article>
      <article class="event-item" style='background-image: url("/img/event.jpeg")'>
        <a href="#">
            <div class="event-content">
              <h3>Event Title</h3>
              <p>Mon 10 Feb</p>
            </div>
        </a>
      </article>
      <article class="event-item" style='background-image: url("/img/event.jpeg")'>
        <a href="#">
            <div class="event-content">
              <h3>Event Title</h3>
              <p>Mon 10 Feb</p>
            </div>
        </a>
      </article>

    </div>
    <a href="#" class='button is-learge learn-more wow bounceInUp'>view events</a>
  </section>
  <!-- end of upcoming events -->

  <div id="food-bg" class="backpic" style="background-image: url('/img/foodpic.jpeg')"></div>

  <!-- Today's Special -->
  <section id="special-today">
    <h2 class="wow bounceInUp">Today's Special</h2>
    <div class="special" style='background-image: url("/img/special.jpeg")'>
      <div class="special-content">
        <h3 class="wow rotateIn">Special Title $8</h3>
        <p class="wow rotateInUpRight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, incidunt.</p>
      </div>
    </div>
  </section>

  <div id='bar-bg' class="backpic" style="background-image: url('/img/backpic.jpeg')"></div>
@endsection

@section ('external_js')
  <script type="text/javascript" src="js/home.js"></script>
@endsection

