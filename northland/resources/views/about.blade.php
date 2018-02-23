@extends ('layouts.master')

@section ('page_title') About Us | Northland Sport's Bar &amp; Grill @endsection

@section ('add_head')
  <link rel="stylesheet" href="/css/about.css">
@endsection

@section ('content')

<h2 id="page-title" class="wow bounceInLeft"><i class="fas fa-beer"> </i> About Us <i class="fas fa-beer"> </i></h2>
  
  <section id="about">
    <div class="image wow bounceInLeft">
        <img src="/img/about-cover.jpg" alt="northland sports bar pic">
    </div>
    <div class="content wow bounceInRight">
      <h1>Watch your favorite sport in Northland Sports Bar &amp; Grill</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum provident voluptas rerum non ea praesentium mollitia, quidem libero odio quod sed voluptatum ducimus minus eligendi? Officia assumenda eaque eveniet, corporis veritatis totam harum molestias velit, unde repellendus, id doloremque! Voluptate.
      </p>
    </div>
    <div class="buttons wow bounceInRight">
      <a href="/contact" class="button is-large contact">Get in touch</a>
      <a href="#" class="button is-large book">Book Now</a>
    </div>
  </section>

  <div id="about-cover" style="background-image: url('/img/about-cover.jpg')"></div>

@endsection