<div class="logo wow bounceInDown">
    <a href="/">
        <img src="{{asset('img/logo-no-bg.png')}}">
    </a>
</div>

  <nav id='topnav' class="navbar ">
    <div class="navbar-brand">

      <div class="navbar-burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
      <div class="navbar-menu" id='navMenu'>
          <div class="navbar-end">
            <a href="/" class="navbar-item nav-list">Home</a>
            <a href="/menu" class="navbar-item nav-list">Menu</a>
            <a href="/event" class="navbar-item nav-list">Events</a>
            <a href="#" class="navbar-item nav-list">Booking</a>
            <a href="/about" class="navbar-item nav-list">About</a>
            <a href="/contact" class="navbar-item nav-list">Contact Us</a>
          </div>
  </nav>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function () {
// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach(function ($el) {
    $el.addEventListener('click', function () {

      // Get the target from the "data-target" attribute
      var target = $el.dataset.target;
      var $target = document.getElementById(target);

      // Toggle the class on both the "navbar-burger" and the "navbar-menu"
      $el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
</script>