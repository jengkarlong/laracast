@extends ('layouts.master')

@section ('page_title') Menu | Northland Sports Bar &amp; Grill @endsection

@section ('add_head')

  <link rel="stylesheet" href="/css/menu.css">

@endsection

@section ('content')

  <h1 id="page-title"><i class="fas fa-utensils"> </i> Our Menu <i class="fas fa-utensils"> </i></h1>
  <a href="#best-seller">Best Seller</a>

  <section id="best-seller">
    <h2 class="title2">Best Seller</h2>
    <div class="items">
      <div class="item" style="background-image: url('/img/foodpic.jpeg')">
        <div class="content">
          <h3>Food name</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, velit.</p>
          <span>$42</span>
        </div>  
      </div>

    </div>
  </section>


  

@endsection
